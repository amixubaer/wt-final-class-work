<!DOCTYPE html>
<html>
<head>
	<title>Database Connection</title>
</head>
<body>
	<h1>Database Connection</h1>

	<?php 

	$host = "localhost";
	$user = "wta_user_1";
	$pass = "123";

	// Mysqli object-oriented
	/*$conn1 = new mysqli($host, $user, $pass);
	if($conn1 -> connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1 -> connect_error;
	}
	else {
		echo "Database Connection Successful!";
	}
	$conn1 -> close();*/

	// Mysqli procedural
	/*$conn2 = mysqli_connect($host, $user, $pass);
	if(mysqli_connect_error()) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn2 -> connect_error;
	}
	else {
		echo "Database Connection Successful!";
	}
	mysqli_close($conn2);*/

	?>
</body>
</html>