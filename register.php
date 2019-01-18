<?php
extract($_POST)
if(isset($register))
{
	mysql_connect("localhost","root","");
	mysql_select_db("11ambatch");
	$sql_qry="insert into info_tbl(name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
	$resultset = mysql_query($sql_qry);
	if($resultset)
	echo "Registration is sucess";
	else
	echo "Registration is not sucess";
}
else
echo "Invalid request";
?>






