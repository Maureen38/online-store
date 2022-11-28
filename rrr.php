<?php
session_start();
header('location:home.html');

$con = mysqli_connect("localhost", "root", "1738");
mysqli_select_db($con, "moreen");

$name = $_POST["user"];
$pass = $_POST["password"];
$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1){
    echo "Username already Exist";
} else{
    $reg= " insert into usertable (name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "registration complete";
}


?>