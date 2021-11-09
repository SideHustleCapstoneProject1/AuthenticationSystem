<?php

    require 'db.php';
    session_start();

    // SET SESSION
    function setSession($msg) {
        if(!empty($msg)) {
            $_SESSION['MESSAGE'] = $msg;
        } else {
            $msg = "";
        }
    }

    //DISPLAY SESSION
    function displaySession() {
        if(isset($_SESSION['MESSAGE'])) {
            echo $_SESSION['MESSAGE'];
            unset($_SESSION['MESSAGE']);
        }
    }

    function signpUser() {
        global $con;
        if(isset($_POST['btn_signup']) || $_SERVER ['REQUEST_METHOD'] == 'POST') {
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
            $create_datetime = date("Y-m-d H:i:s");

            if(empty($username)) {
                $error = "<div>Please enter username</div>";
                setSession($error);
            }
            elseif(empty($email)) {
                $error = "<div>Please enter email</div>";
                setSession($error);
            }elseif(empty($password)) {
                $error = "<div>Please enter password</div>";
                setSession($error);
            }elseif(empty($cpassword)) {
                $error = "<div>Please enter confirm password</div>";
                setSession($error);
            }elseif($password !== $cpassword) {
                $error = "<div>Password and confirm password does not match</div>";
                setSession($error);
            }else {
                $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
                $result = mysqli_query($con, $sql);
                $count = mysqli_num_rows($result);
                if($count > 0) {
                    $error = "<div>Username or email already exists</div>";
                    setSession($error);
                }else {

                    $query = "INSERT into `users` (username, password, email, create_datetime)
                    VALUES ('$username', '".md5($password)."', '$email', '$create_datetime')";
                    if(mysqli_query($con, $query)) {
                        $success = "<div>You have successfully registered</div>";
                        setSession($success);
                    }else {
                        $error = "<div>Something went wrong</div>";
                        setSession($error);
                    }
                }
            }               
        }

    }

    function signinUser() {
        global $con;
        if(isset($_POST['btn_login']) || $_SERVER ['REQUEST_METHOD'] == 'POST') {
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

        
            if(empty($username)) {
                $error = "<div>Please enter email</div>";
                setSession($error);
            }elseif(empty($password)) {
                $error = "<div>Please enter password</div>";
                setSession($error);
            }else { 
                $sql = "SELECT * FROM `users` WHERE username ='$username' and password='".md5($password)."'";
                $result = mysqli_query($con, $sql) or die(mysqli_error($con));

                if($rows = mysqli_fetch_assoc($result)) {
                    $dp_pass = $rows['password'];
                    if(md5(($password)) == $dp_pass) {
                        header("Location: home.php");
                        $_SESSION['ID'] = $rows['id'];
                        $_SESSION['EMAIL'] = $rows['email'];
                        $_SESSION['USERNAME'] = $rows['username'];
                    }else {
                        $error = "<div>Password does not match</div>";
                        setSession($error);
                    }
                }else {
                    $error = "<div>Username does not exist</div>";
                    setSession($error);
                }
            }               
        }

    }
    
    
    

    
?>