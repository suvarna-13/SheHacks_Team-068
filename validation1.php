<?php

session_start();


$con =mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$name= $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM ruraltable WHERE name= '$name' && password= '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] =$name;
    header('location:home.php');
}else{
   header('location:login1.php');
}

?>