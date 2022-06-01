<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="login and reg.css">
</head>
<body>

<div class="container">
    <div class="forms">
        <div class="form login-signup">
            <span class="title">Registration</span>
            <form action="/login-signup/vendor/regf.php" method="post">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="email" name= "email" placeholder="Enter your email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" name="password" placeholder="Create a password" required>
                    <i class="uil uil-lock icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" name="password_conf" placeholder="Repeat your password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="input-field">
                    <input type="text" name= "cardnum" placeholder="Enter your card number" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="text" name= "adress" placeholder="Enter your home address" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="text" name= "phone" placeholder="Enter your phone number" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field button">
                    <button class="btn" type="submit">Login now</button>
                </div>
            </form>
            <div class="login-signup">
                    <span class="text">Already have an account?
                        <a href="index.php" class="text signup-link">Sign in now</a>
                    </span>
            </div>
            <?php
            if($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message']. '</p>';
            }
            unset($_SESSION['message']);
            ?>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
