<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "db1";
$prefix = "";
$con= mysql_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
mysql_select_db($mysql_database, $con) or die("Could not select database");
?>