<?php
$host="dbhost";
$username="dbuser";
$password="dbpasswd";
$db_name="titids";

$mysqli = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$mysqli) {
     die("Connection failed: " . mysqli_connect_error());
}
?>
