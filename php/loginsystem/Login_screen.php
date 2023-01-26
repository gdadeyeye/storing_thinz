<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="calculate.css">
    </head>
    <br></br><br></br><br></br><br></br><br></br>
    <body>
        <h1>Mobile Mechanic</h1><br>
        <table class="center">
            <form method="POST" action="Login_screen.php">
                <tr>
                    <td style="color: white;">Username:</td>
                    <td><input type="text" id="text" name="username" size="25" maxlength="10" required></td>
                </tr>

                <tr>
                    <td style="color: white;">Email Address:</td>
                    <td><input type="email" id="email" name="email" size="25" required></td>
                </tr>


                <tr>
                    <td style="color: white;">Password:</td>
                    <td><input type="password" id="password" name="password" size="25" required></td>
                </tr>

                <tr>
                    <td>
                        <button type="submit" class="btn" name="login_user">Login</button>
                            <tr>
                                <td>
                                    <a href="Signup.php" style="color: white;">Register</a>  |
                                    <a href="./password.html" style="color: white;">Forgot Password</a> 
                                </td>
                            </tr>
                    </td>
                </tr>
            </form>
        </table>
       
        
        






    </body>


</html>