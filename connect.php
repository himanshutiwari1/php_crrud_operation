<?php
$connection = mysql_connect("localhost","root","");
if(!$connection)
{
	die("Database connection failed".mysql_error($connection));
}
$selectdb = mysql_select_db('demo');
if(!$selectdb)
{
	die("Database connection failed" .mysql_error($connection));
}
?>