<?php
session_start();
if(isset(	$_SESSION['user'])){
    $_SESSION['msg']="You must log in first to view this page";
    
}
else{
    header('location:login.php');
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/welcome.css">
 
</head>
<body>
    
    <?php
if(isset($_SESSION['success'])):
?>


<?php endif?>


<div class="main">
        <div class="navbar">
            <div class="icon">
            <h2 class="logo">Congregants Church</h2>
            </div>
            <div class="menu">
                <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="booking.html">BOOK APPOINTMENT</a></li>
                <li><a href="upcoming_events/calender.html">UPCOMING EVENTS</a></li>
                <li><a href="payment.php">SEND OFFERING</a></li>
                <li <?php if(isset($_SESSION['user'])): ?> >
                <a href="logout.php">LOGOUT</a>
                        <?php endif ?>
            </li>

                </ul>
            </div>
           
        </div>
        <div class="content">
            <h1>Welcome to Congregants  church<br><span>Feel free to serve God</span></h1>
  <p>"So were the king's scribes called at that time in the third month, 
    <br>that is, the month Sivan, on the three and twentieth day thereof; <br> and it was written according to all that Mordecai commanded unto the Jews, and to the lieutenants, and the deputies and rulers of the provinces which are from India unto Ethiopia, a hundred twenty and seven provinces,
      <br>unto every province according to the writing thereof
    <br> , and unto every people after their language, and to the
       <br>Jews according to their writing, and according to their language."
    </p>
        </div>
    </div>
    <div class="conatainer">
        <p>hello</p>
    </div>
    <div class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
              <h2>About us</h2>
              <a href="#">Booking</a>
              <a href="#">Events</a>
              <a href="#">Blog</a>
            </div>
            <div class="footer-heading footer-2">
                <h2>Contact Us</h2>
                <a href="#">Emai:samkariuki8841@gmail.coml</a>
                <a href="#">Tel no :0727045660</a>
                <a href="#">Whatsapp no:0110062002</a>
              </div>
              <div class="footer-heading footer-3">
                <h2>Social Media</h2>
                <a href="https://www.instagram.com/">Instagram</a>
                <a href="https://www.facebook.com/sam.kariuki.58118/">Facebook</a>
                <a href="https://www.youtube.com/channel/UC-RAYIHnR3r-WUjVUar7jsQ">Youtube</a>
                <a href="">Twitter</a>
              </div>
              <p>&copy; 2023 Church Management System. All rights reserved.</p>

        </div>
    </div>
</body>
</html>
