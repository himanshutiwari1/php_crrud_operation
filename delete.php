<?php
require_once('connect.php');
$id = $_GET['id'];
$deletsql ="DELETE FROM crud WHERE id=$id";
$res = mysql_query($deletsql);
if($res)
{
	header('location:display.php');
}else{
	echo "Failed to delete record";
}
?>  