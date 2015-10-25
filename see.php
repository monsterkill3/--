<?php 
 include('conn.php');
 $sql = "select * from articles where 1";
 $query = mysqli_query($a,$sql);
 while($rs = mysqli_fetch_array($query)){
 	echo "标题是：".$rs['title']."<br />";
 	echo "内容是：".$rs['content']."<br />";
 }