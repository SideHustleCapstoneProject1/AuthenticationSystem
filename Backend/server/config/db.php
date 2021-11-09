<?php

    $con = mysqli_connect('localhost', 'root', 'Okoromi1@v', 'authsystem');
    if(!$con){
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
    }