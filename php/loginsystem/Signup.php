<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign-Up</title>
        <link rel="stylesheet" type="text/css" href="calculate.css">
    </head>
    <br></br><br></br><br></br><br></br><br></br>


<body>
<h1 style="color: white;">CREATE ACCOUNT</h1><br>
<table align="center">
    <form action ="Signup.php" method="POST">
    <?php include('error.php'); ?>
        <tr>
            <td style="color: white;">Username:</td>
            <td><input type="text" name="username" size="25" required></td>
        </tr>

        <tr>
            <td style="color: white;">Email Address:</td>
            <td><input type="email" name="email" size="25" required></td>
        </tr>


        <tr>
            <td style="color: white;">Password:</td>
            <td><input type="password" name="password_1" size="25" required></td>
        <tr>

        <tr>
            <td style="color: white;">Confirm Password:</td>
            <td><input type="password" name="password_2" size="25" required></td>
        </tr>

    
        <tr>
            <td></td>
            <td><input type="submit" value="submit" size="35" name="reg_user"></td>
            <a href="Login_screen.php">Login</a>
        </tr>
        
    </form>
</table>



</body>
</html>