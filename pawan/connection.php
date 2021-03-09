<?php

   $conn=mysqli_connect('localhost','root','','bs')or die("not connected");

$name=$_POST['fullname'];
$email=$_POST['email'];
$mob=$_POST['Mobno'];
$msg=$_POST['msg'];

$qur="insert into details VALUES('$name','$email','$mob','$msg')";
$r=mysqli_query($conn,$qur);
header("location:contact.html");

?>
