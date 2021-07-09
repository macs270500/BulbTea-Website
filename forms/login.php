<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bulbtea');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = " SELECT * FROM `userregistration` WHERE username = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:../index.php');
    $_SESSION['username'] = $name;     
}else{ 
    header('location:../inner-page.php');
}
?>