<?php
    // username = admin@gmail.com
    // password = 123456
    session_start();
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password)){
            $_SESSION["count"]=1;
            header("location: login.php");
        }
        
       else  if($email==="admin@gmail.com" && $password==123456){
            header('location: admin/index.php');
        }
        else{
            $_SESSION["count"]=1;
            header("location: login.php");
        }

    }
?>