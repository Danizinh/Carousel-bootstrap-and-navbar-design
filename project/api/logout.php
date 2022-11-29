<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['name']);
    unset($_SESSION['password']);
 
    header('Location: ../html/login.php');
    
?>