<!DOCTYPE html>

<html>
<head>
 <title>iACE Franken-Flight</title>
 <link href="site.css" rel="stylesheet">
</head>

<body>
 <?php include("header.php"); ?>
 
 <h1>Welcome to The Franken-Flight</h1>
 <h3>Feel free to give us extra points because we're cute :-)</h3>

 <h2>Your IP address is</h2>
 <?php
 echo $_SERVER['REMOTE_ADDR'];
 ?>
 <h2>The server time is</h2>
 <?php
 echo date("g:i a")
 ?>
<br>
<br>
<br>

<center><img  src="FrankenFlightLogo.png" onclick="this.src='AwesomeSauce.png'"/></center>

</body>

</html>
