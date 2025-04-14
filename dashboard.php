<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1f1f2e;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #2b2b3c;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        .flag {
            font-size: 24px;
            color: #00ffcc;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>🎉 Welcome to the Dashboard</h1>
    <p class="flag">🏴 FLAG: CTF=>Successful_Login</p>
</div>
</body>
</html>
