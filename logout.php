<?php 
session_start();
if(session_destroy())
{
header('location:login_md5.php');
//header('location:login2.php');
}
?>

