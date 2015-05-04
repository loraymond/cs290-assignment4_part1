<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Assignment 4 login.php</title>
		<h2>Please enter a username to continue.</h2>
	</head>
	<body>
		<form action="content1.php" method="post">
		Username:
		<br><input type="text" name="username">
		<input type="submit" name="submit" value="Log On">
		</form>
	</body>
</html>
