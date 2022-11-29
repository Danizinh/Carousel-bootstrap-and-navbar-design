<?php
include_once("../connection/conn.php");

if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_crypt = md5($password);
        $result = mysqli_query($conn, "SELECT id FROM dados  WHERE email = '$email'");
        if(mysqli_num_rows($result)< 1){
            $result = mysqli_query($conn, "INSERT INTO dados(name,email,password) VALUES ('$name','$email','$password_crypt')");
            header('Location:../html/login.php');
        }else{
    }     header('Location:../html/login.php');

}           die();
?>