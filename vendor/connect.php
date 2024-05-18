<?php

    $connect = mysqli_connect('localhost', 'root', 'djso78mek98', 'test');

    if (!$connect) {
        die('Error connect to DataBase');
    }