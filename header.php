<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!--header section-->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="paddle-white.png">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Halifax Canoe and Kayak</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="utility.js"></script>
</head>

<div id="header">
    <ul>
        <li><div id="hamburger"><img src="hamburger.png" height="50" alt="Side Menu"></div></li>
        <li><h2 class="bannertitle">Halifax Canoe and Kayak</h2></li>
        <li><img src="paddle-white.png" height="75" alt="Logo"></li>
    </ul>
</div>

<aside id="leftmenu">
    <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li>Book Trip</li>
        <li>Admin Login</li>
    </ul>
</aside>

</html>