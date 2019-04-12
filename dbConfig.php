<?php 

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'dynamic_select_box';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}

 ?>