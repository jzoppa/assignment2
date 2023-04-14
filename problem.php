<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<?php   $title = $_POST['title'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = $_POST['role'];

//Set session variable
        $_SESSION["firstnameSess"] = $fname;
        $_SESSION["lastnameSess"] = $lname;
        $_SESSION["roleSess"] = $role;
?>

<!--main content-->
<main>
<div class="logout" style="margin:150px 50px 0px 0px; text-align:right;"><a href="logout.php">Log out</a></div>

<h1 class="Hello" style="text-align: left;">Hello 
        <?php echo $_POST['title']; ?>
        <?php echo $_POST['fname']; ?>
        <?php echo $_POST['lname']; ?><br>
</h1>

    <hr>
    <h2>Here are your options:</h2>
<br>

<?php 
?>

<?php
     if ($role == "admin")
{       echo "<a href='isnt-working.php'>My computer isn't working.</a><br><br>";
        
       echo "<a href='new-account.php'>I need a new account.</a>";
        }
     elseif ($role == "manager")
{       echo "<a href='isnt-working.php'>My computer isn't working.</a><br><br>";
        
       echo "<a href='lost-password.php'>I need a new password.</a>";
        }
     else
{       echo "<a href='isnt-working.php'>My computer isn't working.</a><br><br>";
        
       echo "<a href='need-help.php'>I need help.</a>";
        }
?>
        
</main>

<br>
<?php include 'footer.php';?>
</body>
</html>