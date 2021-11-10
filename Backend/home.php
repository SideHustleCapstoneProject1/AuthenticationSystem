<?php
    require_once('./server/config/functions.php');
    if(!isset($_SESSION['ID']) && !isset($_SESSION['username'])){
        header('Location: ./login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System - SH-TEAM YELLOW.</title>

    <meta name="AG-lEARN" description="AG Learn is a self learning platform that using youtube API for its functionality"/>
    
    <!-- custom css -->
    <link rel="stylesheet" href="custom.css">

    <!-- font awesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
</head>
<body>
    <!-- the navigation bar -->
    <div class="navbar">
        <!-- the navigation bar toggle button -->
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- the Learn ag logo -->
        <img src="assets/img/sh-logo.png" class="logo" alt="Learn AG Logo">
        <!-- the search field and button -->
        <div class="search-box">
            <input type="text" class="search-bar" placeholder="search">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
        <!-- user options -->
        <div class="user-options">
            <p class="icon">Welcome <?php echo $_SESSION['USERNAME']; ?></p>
            <img src="assets/img/user.png" class="icon" alt="">
            <a href="logout.php"><i class="fas fa-sign-out-alt" class="icon"></i></a>
            
        </div>
    </div>

    <!-- the sidebar -->
    <div class="side-bar">
        <a href="#" class="links active"><img src="img/home.png" alt="">Home</a>
        <a href="#" class="links"><img src="img/explore.png" alt="">Explore</a>
        <a href="#" class="links"><img src="img/subscription.png" alt="">Quiz</a>
        <hr class="separator">
        <a href="#" class="links"><img src="img/library.png" alt="">Course</a>
        <a href="#" class="links"><img src="img/history.png" alt="">SH Community</a>
        <a href="#" class="links"><img src="img/play-button.png" alt="">Lesson</a>
        <a href="#" class="links"><img src="img/time.png" alt="">Badges</a>
        <a href="#" class="links"><img src="img/like.png" alt="">Certificate</a>
        <a href="#" class="links"><img src="img/more.png" alt="">Show More</a>
    </div>




</body>
</html>