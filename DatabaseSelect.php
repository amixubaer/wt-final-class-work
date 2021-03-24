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

		/*$sql = "select id, username, password from users";
		$res1 = $conn1->query($sql);
		if($res1->num_rows > 0) {
			while($row = $res1->fetch_assoc()) {
				echo "id: " . $row['id'];
				echo "<br>";
				echo "username: " . $row['username'];
				echo "<br>";
				echo "password: " . $row['password'];
				echo "<br>";
				echo "<br>";
				echo "<br>";
			}
		}*/

		echo "<br>";
		echo "Where Statement";
		echo "<br>";
		
		$stmt1 = $conn1->prepare("select id, username, password from users where id=?");
		$stmt1->bind_param("i", $p1);
		$p1 = 13;
		$stmt1->execute();
		$res2 = $stmt1->get_result();
		$user = $res2->fetch_assoc();

		echo "id: " . $user['id'];
				echo "<br>";
				echo "username: " . $user['username'];
				echo "<br>";
				echo "password: " . $user['password'];
				echo "<br>";
				echo "<br>";
				echo "<br>";
	}

	$conn1->close();


	// Mysqli procedural
	/*$conn2 = mysqli_connect($host, $user, $pass, $db);
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
	mysqli_close($conn2);*/

	?>
</body>
</html>