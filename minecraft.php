<!DOCTYPE html>

<html>
<head>
 <title>iACE Franken-Flight</title>
 <link href="site.css" rel="stylesheet">
</head>

<body>
<?php include("MCServerstatus.php"); ?>
<?php include("header.php"); ?>
<?php $server = new MCServerStatus("s.nerd.nu", 25565); ?>

<h1>Welcome to The Franken-Flight</h1>
 
<?php
$var = $server->online;
echo $server->motd;
echo $server->online_players;
echo $server->max_players;
print_r($server);
?>

</body>

</html>
