<?php
    session_start();
    session_unset();
    session_destroy();
    unset($_COOKIE['user_cookie']);
    setcookie('PHPSESSID', '', time() - 3600, '/',"localhost",false,true);
    setcookie('user_cookie', '', time() - 3600, '/',"localhost",false,true);
    header("Location:index.php");
    exit;
?>