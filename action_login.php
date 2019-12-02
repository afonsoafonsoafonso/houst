<?php
    include_once('database/db_users.php');
    include_once('templates/tlp_common.php');
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(check_password($username, $password)) {
        $_SESSION['username'] = $username;
        header('Location: main_page.php');
    }
    else {
        header('Location: login.php');
    }
?>