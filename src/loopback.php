<?php
header('Content-Type: text/plain');
if($_GET != NULL) {
    $output = json_encode($_GET);
    echo $output;
}

if($_POST != NULL) {
    $output = json_encode($_POST);
    echo $output;
} 
?>