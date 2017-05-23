<?php
//use session to connect to different pages
session_start();
require_once ('classes/ShortenClass.php');

$x = new ShortenClass;

//check if url is set

if(isset($_POST['url']))
{
	$url = $_POST['url'];

}

if($code = $x->generateURL($url))
{
	$_SESSION['response']= "Your short URL is: <a href=\"http://localhost/projects/{$code}\">http://localhost/projects/{$code}</a>";
}

header('Location: index.php');
