
<!DOCTYPE html>

<html>
<head>
 <title>iACE Franken-Flight</title>
 <link href="site.css" rel="stylesheet">
</head>

<body>
	
<?php include("header.php"); ?>

<?php

$con=mysqli_connect("localhost","root", "8miles0700Wednesday","ffweb");

if (mysqli_connect_errno()) {
    echo('Could not connect: ' . mysqli_connect_error());
}

echo "<h2>Thank you for your comment!</h2>";

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);

$sql="INSERT INTO webcomment (name, email, comment)
VALUES ('$name', '$email', '$comment')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
} 

//echo "1 entry added";

mysqli_close($con);

?>

</body>
</html>
