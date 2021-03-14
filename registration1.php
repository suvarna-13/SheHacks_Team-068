<?php

session_start();
header('location:login1.php');

$con =mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM ruraltable WHERE name= '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" username already taken";
}else{
    $reg=" INSERT INTO ruraltable(name , password) values('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>