<?php
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("db1", $con);

$result = mysql_query("some command");
$row = mysql_fetch_array($result);

mysql_close($con);
?>