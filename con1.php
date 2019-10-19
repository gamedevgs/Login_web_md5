<?php


$con= mysqli_connect("192.168.1.128","root","root","dj_dy_rmb");

if(!$con)
{
 die("con failed". mysqli_connect_error($con));	
}
echo 'ket noi thanh cong';
?>