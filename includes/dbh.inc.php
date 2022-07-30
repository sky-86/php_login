<?php

$server_name = "containers-us-west-35.railway.app";
$db_username = "root";
$db_password = "O9IMQ0WCDNn3hs78vHeL";
$db_name = "railway";
$port = "7926";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name, $port);

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
