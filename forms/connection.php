<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connection to Database</title>
</head>

<body>

<?php  //Set up the database access credentials
	$hostname = 'localhost';
	$username = 'root'; //your standard uni id
	$password = '';  // the password found on the W: drive
	$databaseName = 'bulbtea'; //the name of the db you are using on phpMyAdmin
	$connection = mysqli_connect($hostname, $username,$password, $databaseName) or exit("Unable to connect to database!");
?>

</body>
</html>
