<?php
$conn = mysql_connect("120.77.216.100","root","woshizhu123") or die("数据库链接错误".mysql_error());
mysql_select_db("player",$conn) or die("数据库访问错误".mysql_error());
mysql_query("set names gb2312");
?>
