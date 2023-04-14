<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<!--main content-->
<main>
        <h1 class="logout" style="margin: 125px 0px 0px 0px; text-align: left;">You are now logged out.</h1>
    <hr>
    <br>

<?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    echo "All session variables have been removed and the session has been destroyed."
?>
<br><br>
</main>

<!--return to login page?-->
<div><a href='adminlogin.php'>Log in again?</a><div>

<br>

<?php include 'footer.php';?>
</body>
</html>
