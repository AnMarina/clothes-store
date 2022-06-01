<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'test');

session_start();


$email=$_POST['email'];
$password=md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

if (mysqli_num_rows($check_user)>0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id"=> $user['id'],
        "name" => $user['name'],
        "cardnum" => $user['cardnum'],
        "email" => $user['email']
    ];
//header("Location: ../profile.php");
    header("Location: http://localhost:63343/site/demo2/wpage/merch.html");
}
else {
    $_SESSION['message'] = 'Incorrect email or password';
    header('Location: ../index.php');

}