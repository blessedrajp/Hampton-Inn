﻿<?php
$username="siteadmin_rkr432k0nea6";
$password='~)+C?rlMSp.r';
$host="localhost";
$dbname = "siteadmin_property-maintenance-system";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['ip']) && isset($_POST['country'])){
$ipaddress = $_POST['ip'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal = $_POST['postal'];
$country_code = $_POST['country_code'];
$url =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$sql = "INSERT INTO click_history (url,ip,country,city,state,postal,cc) VALUES ('$url','$ipaddress', '$country','$city','$state', '$postal','$country_code')";
if ($conn->query($sql) === TRUE) {
  echo 1;
} else {
  echo 0;
}
$conn->close();
}

?>