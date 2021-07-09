<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bulbtea');

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uname = $_POST['rusername'];
$pass = $_POST['rpassword'];

$s = " SELECT * FROM `userregistration` WHERE username = '$uname' ";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:../inner-page.php#sign-up');
}else{
    $reg = "INSERT INTO `userregistration`(`name`, `surname`, `email`, `phone`, `username`, `password`) VALUES ('$name','$surname','$email','$phone','$uname','$pass')";
    mysqli_query($con,$reg);
    header('location:../inner-page.php#sign-up');
}

?>