<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<!--main content-->
<main>
<div class="logout" style="margin:150px 50px 0px 0px; text-align:right;"><a href="logout.php">Log out</a></div>

        <h1 class="lostPassword" style="text-align: left;">Send us a message</h1>
<hr>
<br>
        <form method="post" name="lost-password" action="send-email.php">
        Message: <textarea name="message"></textarea>
        <input type="hidden" id="emailType" name="emailType" value="lostPassword">
        <input type="submit" value="Submit">
        </form>

<br>
</main>

<?php include 'footer.php';?>
</body>
</html>