<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = $_POST["username"];
	$password = $_POST["password"];

	if(empty($username) || empty($password)) {
		echo "Fill up the form properly";
	}
	else {

		$conn = new mysqli("localhost", "wta_user_1", "123", "wta");

		if($conn -> connect_error) {
			echo "Failed to connect database!";
		}
		else {

			$stmt = $conn -> prepare("INSERT INTO Users (username, password) VALUES(?, ?)");
			$stmt -> bind_param("ss", $username, $password);

			$status = $stmt -> execute();

			if($status) {
				echo "Successfully saved!";
			}
			else {
				echo "Failed to save data!";
			}
			$conn -> close();
		}	
	}

}

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$searchKey = $_GET['searchKey'];
	$sql = "SELECT id, username FROM Users WHERE id = " . $searchKey;

	if(empty($searchKey)) {
		$sql = "SELECT id, username FROM Users";
	}
	
	$conn = new mysqli("localhost", "wta_user_1", "123", "wta");

	if($conn -> connect_error) {
		echo "Failed to connect database!";
	}
	else {
		$result = $conn -> query($sql);

		if($result -> num_rows > 0) {

			echo "<ol>";

			while($row = $result -> fetch_assoc()) {

				echo "<li>";
				echo $row["id"] . " " . $row["username"];
				echo "</li>";
			}

			echo "</ol>";
		} 
		else {
			echo "No record found!";
		}
	}
		
	$conn -> close();
}

?>