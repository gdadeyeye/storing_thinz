
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
    <form action="Register.php" method="post">
        <tr>
            <td style="color: white;">Username:</td>
            <td><input type="text" name="uid" size="25" required></td>
        </tr>

        <tr>
            <td style="color: white;">Email Address:</td>
            <td><input type="email" name="mail" size="25" required></td>
        </tr>


        <tr>
            <td style="color: white;">Password:</td>
            <td><input type="password" name="pwd" size="25" required></td>
        <tr>

        <tr>
            <td style="color: white;">Confirm Password:</td>
            <td><input type="password" name="pwd-repeat" size="25" required></td>
        </tr>

    
        <tr>
            <td></td>
            <td><input type="submit" name="signup-submit" value="submit" size="35"></td>
            <a href="Login_screen.php">Login</a>
        </tr>
        
    </form>
</table>

</body>
</html>