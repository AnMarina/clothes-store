<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel = "stylesheet" href = "profile.css">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>

<nav>
    <!--Navbar has two part the top one and the bottom one-->
    <!--Here is top one and in this part I put logo, my account part, and the shopping cart-->
    <div class="navbar-top">
        <div>
            <button id="menuButton"><i class="fas fa-bars"></i></button>
            <!--Logo-->
            <a href="http://localhost:63343/site/demo2/wpage/merch.html">
                <h2 class="logo">QRUT</h2>
            </a>
        </div>
    </div>
    <div class="navbar" id="navbar">
        <div class="links">
            <ul>
                <li class="nav-links">
                    <a href="testik.html" class="link">Clothes</a>
                </li>
                <li class="nav-links">
                    <a href="#" class="link">Accessories</a>
                </li>
                <li class="nav-links">
                    <a href="#" class="link">Props</a>
                </li>
                <li class="nav-links">
                    <a href="#" class="link">About</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<form>
    <img src="icon.png" width="128" alt="">
    <h2><?= $_SESSION['user']['name'] ?></h2>
    <h3><?= $_SESSION['user']['email'] ?></h3>
    <a href="/login-signup/vendor/logout.php" class="logout">Logout</a>
</form>

<footer>
    <div class="row-footer">
        <div class="col-footer">
            <h1>QRUT</h1>
        </div>
        <div class="col-footer">
            <h3>Location <div class="underline"><span></span></div></h3>
            <p>Astana IT University</p>
            <p>Nur-Sultan, Kazakhstan</p>
            <p class="email-id">dream@team.com</p>
        </div>
        <div class="col-footer">
            <h3>Navigation<div class="underline"><span></span></div></h3>
            <ul class= "footerul">
                <li><a href="#">Home</a></li>
                <li><a href="#">Clothes</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Props</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>

        <div class="col-footer">
            <h3>Please contact us!<div class="underline"><span></span></div></h3>
            <form>
                <i class="far fa-envelope"></i>
                <input type="email" placeholder="Enter your email id" required>
                <button type="submit"><i class="fas fa-arrow-right"></i></button>
            </form>

            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-pinterest"></i>
            </div>
        </div>
    </div>
    <hr>
    <p class="copyright">Dream Team @ 2022 - All Rights Reserved</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>