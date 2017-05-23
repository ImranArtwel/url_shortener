<?php
require_once('classes/ShortenClass.php');

//get short url from the session
if(isset($_GET['short_url']))
{
	$x = new ShortenClass;
	$short_url = $_GET['short_url'];
	
	if($url = $x->getURL($short_url))
	{
	  header("Location: {$url}");
      die();
      	  
	}
}
header('Location: index.php');
?>