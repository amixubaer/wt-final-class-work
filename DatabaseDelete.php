<!DOCTYPE html>
<html>
<head>
	<title>Database Delete</title>
</head>
<body>
	<h1>Database Delete</h1>

	<?php 

	$host = "localhost";
	$user = "wta_user_1";
	$pass = "123";
	$db = "wta";

	// Mysqli object-oriented
	$conn1 = new mysqli($host, $user, $pass, $db);

	if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "Database Connection Successful!";

		/*$stmt1 = $conn1->prepare("delete from users where id=?");
		$stmt1->bind_param("i", $p1);
		$p1 = 4;
		$status = $stmt1->execute();
		if($status) {
			echo "Data Delete Successful.";
		}
		else {
			echo "Failed to Delete Data.";
			echo "<br>";
			echo $conn1->error;
		}*/
	}

	$conn1->close();


	// Mysqli procedural
	$conn2 = mysqli_connect($host, $user, $pass, $db);

	if(mysqli_connect_error()) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn2 -> connect_error;
	}
	else {
		echo "Database Connection Successful!";

		$stmt2 = mysqli_prepare($conn2, 'delete from users where id=?');
		mysqli_stmt_bind_param($stmt2, 'i', $p3);
		$p3 = 8;
		mysqli_stmt_execute($stmt2);
	}
	mysqli_close($conn2);

	?>
</body>
</html>