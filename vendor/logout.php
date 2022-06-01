<?php
session_start();
unset($_SESSION['user']);
header('Location: http://localhost:63343/site/demo2/nopage/merch.html');