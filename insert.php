<meta charset="utf-8">
<?php 
   include('conn.php');
   if ($_POST['subl']) {
   		$name = $_POST['name'];
   		$sex = $_POST['sex'];
   		$info =  $_POST['info'];
   		echo "$name";
   		echo "$info";
   		$sql = "INSERT INTO `articles`( `title`, `content`) VALUES ('$name','$info')";
   		mysqli_query($a,$sql);
   }
