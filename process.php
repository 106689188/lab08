<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $token = $_POST['token'];

    if ($username == 'Hassan' && $password == '106689188') {
        $_SESSION['user'] = $username;
        $_SESSION['token'] = $token;
        header('Location: welcome.php');
    } else {
        header('Location: login.php?error=1');
    }
    exit();
?>
