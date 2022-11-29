<?php 
session_start();
 if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
 {
    include_once("../connection/conn.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_crypt = md5($password);
$sql = "SELECT * FROM dados WHERE email = '$email' and password = '$password_crypt'";
    
$result = $conn->query($sql);
    
if(mysqli_num_rows($result)< 1)
    {    
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: ../html/login.php?erro=1');
}
else
    {
        $row = $result -> fetch_row();
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $row[0]; 
        $_SESSION['name'] = $row[1];
        $_SESSION['phone'] = $row[2];
        
    header("Location:../api/system.php");
    }
}

else{
    header('Location: ../html/login.php?erro=1');    
}

?>