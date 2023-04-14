<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<!--main content-->
<main>
<div class="logout" style="margin:150px 50px 0px 0px; text-align:right;"><a href="logout.php">Log out</a></div>

<h1 class="send-email" style="text-align: left;">Thank you for your email.</h1>
<hr>
<br>

<?php
  $message = $_POST['message'];
  $emailType = $_POST['emailType'];
?>

<?php
if ($emailType == "newAccount") {
  echo "Thanks for letting us know that you need a new account.";
} else {
  echo "Thanks for letting us know that you need a new password.";
}
?>

<br><br>
</main>

<?php include 'footer.php';?>
</body>
</html>