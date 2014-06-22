<!DOCTYPE html>

<html>
<head>
 <title>iACE Franken-Flight</title>
 <link href="site.css" rel="stylesheet">
</head>

<body>
	<?php include("header.php"); ?>
	
<h1>Welcome to The Franken-Flight</h1>
 
<form action="manage_comments.php" method="post">
	<fieldset>
	<legend>Please provide feedback.</legend>
	Name: <input type="text" name="name" /><br />
	Email: <input type="text" name="email" /><br />
	Comment:<br />
	<textarea name="comment" /></textarea><br />
	<input type="submit"/>
	</fieldset>
</form>

</body>

</html>
