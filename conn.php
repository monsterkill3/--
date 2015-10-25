<meta charset="utf-8">
<?php
	$a = @mysqli_connect("localhost","root","123456") or die("连接数据库失败");
	mysqli_select_db($a,"message");
	mysqli_query($a,"set names utf8"); 
	
 ?>