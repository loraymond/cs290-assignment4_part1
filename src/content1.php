<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

session_start();
if(isset($_POST['username'])) {
	if(ctype_space($_POST['username']) || $_POST['username'] == null) {
		echo "You must enter a username to continue. 
		<br>Click <a href=login.php><strong>here</strong></a> to return to the login screen.";
		$_SESSION['loggedOn'] = false;
	}
	else {
		if(!isset($_SESSION['username'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['visits'] = 0;
			$_SESSION['loggedOn'] = true;
		}
	}
}

if(isset($_SESSION['username'])) {
	if(isset($_POST['username'])) {
		if ($_SESSION['username'] != $_POST['username']) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['visits'] = 0;
			$_SESSION['loggedOn'] = true;
		}
	}
	$_SESSION['visits']++;
	echo "Hello, " . $_SESSION['username'] . ", you have visited this page " . $_SESSION['visits'] . " time(s) before."; 
	echo "<p>Click <a href=content2.php><strong>here</strong></a> for more content.";
	echo "<p>Or, Click <a href=login.php><strong>here</strong></a> to logout.";

}

if (!isset($_SESSION['loggedOn'])) {
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
}
?>