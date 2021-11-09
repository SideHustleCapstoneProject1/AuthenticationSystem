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
    <title>Document</title>
</head>
<body>

    <div>
        Welcome <?php echo $_SESSION['USERNAME']. $_SESSION['EMAIL']; ?>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>