<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$database ="cms";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
	die("connection_failed").mysqli_connect_error();
}
else
{
	echo "connection_successful";
}
?>