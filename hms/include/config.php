<?php
$mysql_hostname = "sql12.freemysqlhosting.net";
$mysql_user = "sql12350266";
$mysql_password = "kd9SbGtdFn";
$mysql_database = "sql12350266";
$bd = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database,$bd) or die("Could not select database");

?>