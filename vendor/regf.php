<?php
session_start();
$connect = mysqli_connect('localhost', 'root', 'root', 'test');
if(!$connect) {
    die('Error');
}
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_conf=$_POST['password_conf'];
$cardnum=$_POST['cardnum'];
$adress=$_POST['adress'];
$phone=$_POST['phone'];

$check_user= mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
if (mysqli_num_rows($check_user)>0){

    $_SESSION['message'] = 'Email has been used already';
    header('Location: ../index.php');

}
else{
    if ($password === $password_conf) {
//        die("Hello, just now you registered to the Qrut online store!");
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `password`, `cardnum`, `adress`, `phone`) VALUES (NULL, '$name', '$email', '$password', '$cardnum','$adress', '$phone')");
        $_SESSION['message'] = 'Successful registration';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Different passwords';
        header('Location: ../reg.php');
    }
}