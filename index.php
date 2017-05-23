<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mitosis Sdn Bhd</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
</head>
<body>
	<div class="container">
		<h3 class="title">URL Shortening..</h3>
		
		<?php
		if(isset($_SESSION['response']))
		{
			echo "<p>{$_SESSION['response']}</p>";
			unset($_SESSION['response']);
		}
		?>

		<form action="shortener.php" method="post">
		 <input type="url" name="url" placeholder="Enter URL here" autocomplete="off">
		 <input type="submit" name="submit" value="Shorten">
			
		</form
		
		
	</div>

</body>
</html>