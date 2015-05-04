<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if(isset($_SESSION['loggedOn'])) {
	echo "Welcome to content2.php " . $_SESSION['username'] . "!";
	echo "<p>I think you came here looking for more content. There isn't much here, but if you haven't heard yet, The New England Patriots won the Super Bowl!! Go PATS!";
	echo "<p>Click <a href=content1.php><strong>here</strong></a> to return to content1.php.";
	echo "<P>Or, click <a href=login.php><strong>here</strong></a> to log out.";
}
else {
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
}
?>