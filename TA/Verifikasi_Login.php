<?php
    include("User.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new user($email, $password);

    if($getUsername = $user->cariUsername($email, $password)){
        echo '<script>alert("Login Anda Berhasil\n\nSelamat datang '.$getUsername.'");location="menu.html";</script>';
    }
    else{
        echo '<script>alert("Email/Password Anda Salah!");location="Login.html";</script>';
    }
