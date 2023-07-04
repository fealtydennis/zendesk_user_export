<?php
$db_host = "localhost";
$db_uname = "root";
$db_password = "";
$db_name = "kaf_zendesk";

$conn = new mysqli($db_host, $db_uname, $db_password, $db_name);

if(!$conn){
    die("Connection failed:" .mysqli_connect_error());
}else{
    "Connection Successful";
}
?>