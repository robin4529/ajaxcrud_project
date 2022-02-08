<?php

//define("DB_SERVER", "localhost");

//define("DB_USER", "root");
//define("DB_PASSWORD", "");
//define("DB_DATABASE", "ajax_class");

//$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$connect =new mysqli('localhost','root','','ajax_class');


$name = $_POST['name'];
$email = $_POST ['email'];
$cell = $_POST ['cell'];



$connect-> query("INSERT INTO users ( name, email, cell) VALUES ('$name','$email','$cell')");

echo "<p class=\"alert alert-success \"> Data stable</p>";



?>

