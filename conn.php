<?php 
 $conn = mysql_connect("localhost",xuekirby","505515") or die("���ݿ����Ӵ���".mysql_error());
 mysql_select_db("info_db",$conn) or die("���ݿ���ʴ���".mysql_error());
 mysql_query("set names gb2312");
?>