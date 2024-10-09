<?php
    error_reporting(0);
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $databasename = "loginadmin";
    $connection = mysql_connect($host, $username, $password) or die (mysql_error());
    mysql_select_db($database, $connection) or die (mysql_error());
?>