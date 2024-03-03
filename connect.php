<?php

if (isset($_POST['submit']) ) {
$name = $_POST['name'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$time = $_POST['time'];
$date = $_POST['date'];  
$place = $_POST['place'];
$msg = $_POST['msg'];
$con = mysqli_connect('localhost:3307', 'root', '', 'hospito'); 
$sql="INSERT INTO clientdetails (name, mail, mobile, gender, time, date, place, msg) values ('$name', '$mail', '$mobile', '$gender', '$time', '$date', '$place', '$msg') ";
mysqli_query($con,$sql);
}

?>   