<!DOCTYPE html>
<html>
<head>
	<title>JS Form Action</title>
</head>
<body>

	<h1>JS Form Action</h1>

	<?php 

		if($_SERVER["REQUEST_METHOD"] == "POST") {

			if(empty($_POST['username']) || empty($_POST['password'])) {
				echo "Please fill up the form properly";
			}
			else {
				echo "Successful! Data saved to database";
			}
		}
	?>

</body>
</html>