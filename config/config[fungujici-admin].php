<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("md6.wedos.net", "a181478_udrzba", "gxS2ucc2", "d181478_udrzba");//Connection variable

if(mysqli_connect_errno())
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>
