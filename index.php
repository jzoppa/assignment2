<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<!--main content-->
<main>
    <div class="logout" style="margin:150px 50px 0px 0px; text-align:right;"><a href="logout.php">Log out</a></div>
        <div class="container1">
        <fieldset>
            <h1>Welcome to Your IT Support System</h1></br>
                <form action="problem.php" method="post">
                    <select id="title" name="title">
                        <option value="Mr">Mr.</option>
                        <option value="Mrs">Mrs.</option>
                        <option value="Ms">Ms.</option>
                    </select>

                    <input type="text" id="fname" name="fname" value="" placeholder="First Name">
                    <input type="text" id="lname" name="lname" value="" placeholder="Last Name">
                    
                    <select id="role" name="role">
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="ceo">CEO</option>
                    </select>
                
                    <input type="submit" value="Submit">
                </form>
        </fieldset>
    </div>
<br>
</main>

<?php include 'footer.php';?>
</body>
</html>