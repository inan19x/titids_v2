<?php
session_start();
include "../mysql_connect.php";

$uname=$_POST["username"];
$passwd=md5($_POST["password"]);

$sqlusr="SELECT uname,passwd FROM NETADM WHERE uname='$uname'";
$qryusr=mysqli_query($mysqli,$sqlusr);
$ada=mysqli_num_rows($qryusr);
$rowusr=mysqli_fetch_array($qryusr);
if($ada>0){
	if($passwd==$rowusr["passwd"]){
		$_SESSION["netadmin"]=$rowusr["passwd"];
	}
}
header("Location:../");
?>
