<?php
session_start();
header('location:home.html');

$con = mysqli_connect("localhost", "root", "1738");
mysqli_select_db($con, "moreen");

$name = $_POST["user"];
$pass = $_POST["password"];
$s = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1){
    $_SESSION['username'] = $name;
    header('location: home.html');
} else{
    header('location: rgs.html');
}


?>
