<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'login');

$name =$_POST['user'];
$pass =$_POST['password'];

$s = "select * from form where name='$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";    
} else {
    $reg = "insert into form (name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
}

?>