<?php
session_start();
if(isset($_SESSION['username'])){
    $_SESSION['msg']="You must log in first to view this page";
    // header('location:welcome.php');
}
else{
    header('location:login.php');
}

?> 