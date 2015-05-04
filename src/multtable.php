<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Assignment 4 multtable.php</title>
	<head>
	<body>
<?php

$min_multiplicand = $_GET['min-multiplicand'];
$max_multiplicand = $_GET['max-multiplicand'];
$min_multiplier = $_GET['min-multiplier'];
$max_multiplier = $_GET['max-multiplier'];

//echo "{$min_multiplicand}";
//echo "<br>{$max_multiplicand}";
//echo "<br>{$min_multiplier}";
//echo "<br>{$max_multiplier}";

if (minMcandErrChk($min_multiplicand, $max_multiplicand) >= 0 && maxMcandErrChk($max_multiplicand) >= 0 
	&& minMplierErrChk($min_multiplier, $max_multiplier) >= 0 && maxMplierErrChk($max_multiplier) >= 0) {
	
	//echo "<br>ALL VARIABLES PASSED";

	$tall = ($max_multiplicand - $min_multiplicand + 2); //rows
	$wide = ($max_multiplier - $min_multiplier + 2); //columns
	
	$yMin = $min_multiplicand;
	$yMax = $max_multiplicand;
	$xMin = $min_multiplier;
	$xMax = $max_multiplier;

	echo "<table border = 1>";
	echo "<tr><th></th>";
	for ($x = $xMin; $x <= $xMax; $x++) {
		echo "<th>".$x."</th>";
	}
	echo "</tr>\n";
	for ($y = $yMin; $y <= $yMax; $y++) {
		echo "<tr><th>".$y."</th>";
		for($z = $xMin; $z <= $xMax; $z++) {
			echo "<td>" .$y * $z. "</td>";
		}
	echo "</tr>";
	}
	echo "</table>";


}

/*
//******error checking for min_multiplicand
	if($min_multiplicand == null) {
		echo "<p><b>Mininum multiplicand</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}
	elseif(!is_numeric($min_multiplicand)) {
		echo "<p><b>Minimum multiplicand</b> must be an <b>integer</b>.";
	}
	elseif($min_multiplicand <= 0) {
		echo "<p><b>Minimum multiplicand</b> must be <b>greater</b> than 0.";
	}
	elseif($min_multiplicand > $max_multiplicand) {
		echo "<p><b>Mininum mutliplicand</b> is <b>greater</b> than the maximum multiplicand, please enter a multiplicand value that is <b>less than or equal</b> to the maximum.";
	}

//******error checking for max_multiplicand
	if($max_multiplicand == null) {
		echo "<p><b>Maximum multiplicand</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}
	elseif(!is_numeric($max_multiplicand)) {
		echo "<p><b>Maximum multiplicand</b> must be an <b>integer</b>.";
	}
	elseif($max_multiplicand <= 0) {
		echo "<p><b>Maximum multiplicand</b> must be <b>greater</b> than 0.";
	}

//******error checking for min_multiplier
	if($min_multiplier == null) {
		echo "<p><b>Minimum multiplier</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}	
	elseif(!is_numeric($min_multiplier)) {
		echo "<p><b>Minimum multiplier</b> must be an <b>integer</b>.";
	}
	elseif($min_multiplier <= 0) {
		echo "<p><b>Minimum multiplier</b> must be <b>greater</b> than 0.";
	}
	elseif($min_multiplier > $max_multiplier) {
		echo "<p><b>Mininum mutliplier</b> is <b>greater</b> than the maximum multiplier, please enter a multiplier value that is <b>less than or equal</b> to the maximum.";
	}
	
//******error checking for max_multiplier
	if($max_multiplier == null) {
		echo "<p><b>Maximum multiplier</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}
	elseif(!is_numeric($max_multiplier)) {
		echo "<p><b>Maximum multiplier</b> must be an <b>integer</b>.";
	}
	elseif($max_multiplier <= 0) {
		echo "<p><b>Maximum multiplier</b> must be <b>greater</b> than 0.";
	}
*/

function minMcandErrChk($min_multiplicand, $max_multiplicand) {
	if($min_multiplicand == null) {
		echo "<p><b>Mininum multiplicand</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}
	elseif(!is_numeric($min_multiplicand)) {
		echo "<p><b>Minimum multiplicand</b> must be an <b>integer</b>.";
	}
	elseif($min_multiplicand > $max_multiplicand) {
		echo "<p><b>Function: Mininum mutliplicand</b> is <b>greater</b> than the maximum multiplicand, please enter a multiplicand value that is <b>less than or equal</b> to the maximum.";
	}
	else {
		//echo "<br>MIN MULTIPLICAND PASSED";
		return $min_multiplicand;
	}
}

function maxMcandErrChk($max_multiplicand) {
	if($max_multiplicand == null) {
		echo "<p><b>Maximum multiplicand</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}
	elseif(!is_numeric($max_multiplicand)) {
		echo "<p><b>Maximum multiplicand</b> must be an <b>integer</b>.";
	}
	else {
		//echo "<br>MAX MULTIPLICAND PASSED";
		return $max_multiplicand;
	}
}

function minMplierErrChk($min_multiplier, $max_multiplier) {
	if($min_multiplier == null) {
		echo "<p><b>Minimum multiplier</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}	
	elseif(!is_numeric($min_multiplier)) {
		echo "<p><b>Minimum multiplier</b> must be an <b>integer</b>.";
	}
	elseif($min_multiplier > $max_multiplier) {
		echo "<p><b>Mininum mutliplier</b> is <b>greater</b> than the maximum multiplier, please enter a multiplier value that is <b>less than or equal</b> to the maximum.";
	}
	else {
		//echo "<br>MIN MULTIPLIER PASSED";
		return $min_multiplier;
	}
}

function maxMplierErrChk($max_multiplier) {
	if($max_multiplier == null) {
		echo "<p><b>Maximum multiplier</b> is <b>missing</b>, please enter a minimum multiplicand.";
	}
	elseif(!is_numeric($max_multiplier)) {
		echo "<p><b>Maximum multiplier</b> must be an <b>integer</b>.";
	}
	else {
		//echo "<br>MAX MULTIPLIER PASSED";
		return $max_multiplier;
	}
}
?>
</body>
</html>