<?php
require_once('dbHendler.php');

class ShortenClass
{
    protected $conn; 
	 public function __construct()
	 {
		 //create a connection to the server
		$this->conn =  new mysqli(db_host,db_user,db_pass,db_name)
         OR die('Could not connect to MYSQL ' . mysqli_connect_error()); 
	 }
	protected function generateStringCode($urlID)
	{
		//convert the unique uri id of the url to base 36
       return base_convert($urlID, 10, 36);
	}

	public function generateURL($url)
	{
       $url = trim($url); // for validation 
	  

       // avoid sql injection
	   $url = $this->conn->escape_string($url);
	   

       //Check if url already exists in the database
        $sql = "SELECT short_url FROM urls where url = '$url'";
		$result = $this->conn->query($sql);
	   
	    if($result->num_rows > 0)
		{
			return $result->fetch_object()->short_url;
		}

       else //generate new url
       {
           //Insert a url first then generate a short url for that url
            $sql = "INSERT INTO urls (url,creation_date) VALUES ('{$url}', now())";		   
		    $this->conn->query($sql); 
			
			//generate short url consistent with the url id in the DB and update the record
			$short_url = $this->generateStringCode($this->conn->insert_id); // insert_id gives the last inserted id
			$update_sql = "UPDATE urls set short_url = '{$short_url}' where url = '{$url}'";
			$this->conn->query($update_sql);
			
			return $short_url;
			
       }

	}

	public function getUrl($shortURL)
	{
		
       $shortURL = $this->conn->escape_string($shortURL);
	   $sql = "SELECT url FROM urls where short_url = '$shortURL'";
	   $response = $this->conn->query($sql);
	   
	   if($response->num_rows > 0)
	   {
		   return $response->fetch_object()->url;
	   }
	   else
	   {
		   return "";
	   }
	}
}
?>