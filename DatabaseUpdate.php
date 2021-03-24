<!DOCTYPE html>
<html>
<head>
	<title>Database Update</title>
</head>
<body>
	<h1>Database Update</h1>

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

		/*$stmt1 = $conn1->prepare("update users set password=? where id=?");
		$stmt1->bind_param("si", $p1, $p2);
		$p1 = '555';
		$p2 = 12;
		$status = $stmt1->execute();
		if($status) {
			echo "Data Update Successful.";
		}
		else {
			echo "Failed to Update Data.";
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

		$stmt2 = mysqli_prepare($conn2, 'update users set password=? where id=?');
		mysqli_stmt_bind_param($stmt2, 'si', $p3, $p4);
		$p3 = "100";
		$p4 = 4;
		mysqli_stmt_execute($stmt2);
	}
	mysqli_close($conn2);

	?>
</body>
</html>