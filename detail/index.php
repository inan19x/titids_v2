<?php
session_start();
if(isset($_SESSION["netadmin"])){
include "../mysql_connect.php";

$ip=$_REQUEST["ip"];
list($byte1,$byte2,$byte3,$byte4)=explode(".",$ip);
if($ip!=""){
	if($byte1=="10" OR $byte1=="172" OR $byte1=="192"){
		echo "<div style=\"padding:10px;\">Could not resolve IP. This IP Address must be private IP ranges. Please refer to <a href=\"http://www.faqs.org/rfcs/rfc1918.html\" target=\"_blank\" >RFC 1918</a>.";
	}
	else{
	echo "<div style=\"padding:10px;\">";
		$response=file_get_contents("http://ip-api.com/json/$ip");
		$data=json_decode($response, true);
		$city=$data['city'];
		$region=$data['regionName'];
		$country=$data['country'];
		$isp=$data['isp'];
		$as=$data['as'];
		$lat=$data['lat'];
		$lon=$data['lon'];
		$cc=$data['countryCode'];
		echo "<table border=\"0\"><tr><td style=\"height:20px;\">ISP</td><td>:</td><td> $isp ($as)</td></tr><tr><td>City</td><td>:</td><td style=\"height:20px;\"> $city, $region (Lat: $lat, Lon: $lon)</td></tr><tr><td style=\"height:20px;\">Country</td><td>:</td><td> $country <img src=\"https://flagsapi.com/$cc/flat/16.png\" alt=\"CC Flag\"/></td></tr></table>";
	}
	echo "</div>";
}
}
else{
	header("Location:../");
}
?>
