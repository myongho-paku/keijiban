<?php
mb_internal_encoding("utf8");
$pdo= new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
value('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
header("Location:http://localhost/4each_keijiban/index.php");
?>