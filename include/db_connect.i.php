<?php

$srv	=	"127.0.0.1";
$db_u	=	"root";
$db_p	=	"";
$db_name=	"php_test_db";

$conn = mysqli_connect($srv,$db_u,$db_p,$db_name);
if (!$conn){
	die("Connection failed. Error: ". mysqli_connect_error());
}
else{
	echo "success!";
}
