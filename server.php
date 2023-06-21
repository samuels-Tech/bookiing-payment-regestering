<?php
session_start();
//initializing variables
$username ="";
$email="";

$errors=array();
//connect to db
$db=mysqli_connect('localhost','root','','practice')or
die("could not connect to database");
if($db){

    // echo "successfully connect//ed";
    //registering user
if(isset($_POST['register_user']))
{

}}





// login logic
if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
$password_1=mysqli_real_escape_string($db,$_POST['Password-1']);
$password= md5($password_1);
$sql = "SELECT * FROM user WHERE username='$username'  AND password='$password' LIMIT 1";
$results = mysqli_query($db,$sql);

if($results){
    $user=mysqli_fetch_assoc($results);
    if($user===null){
        array_push($errors,"user not found"); 
    }else{
        $_SESSION['username']=$username;
            $_SESSION['success']="You are now logged in";
            header('location:welcome.php');
    
    }
}
else{
    array_push($errors,"congregant not found"); 
}
}

?>