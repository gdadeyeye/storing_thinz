<?php
    if (isset($_POST['login-submit'])){
        require 'dbh.inc.php';
        $mailuid = $_POST['text'];
        $password = $_POST['password'];

        if (empty($mailuid) || empty($password)){
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else{
            $sql = "SELECT * from users WHERE uidUsers? OR emailUsers=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"ss",$mailuid, $password);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row= mysqli_fetch_assoc()){
                    $pwdCheck = password_verify($password, $row['pwdUsers']);
                    if($pwdCheck == false){
                        header("Location: ../index.php?error=wrongpwd");
                        exit();
                    }
                    else if($pwdCheck == true){
                        session_start();$
                        $SESSION['userid'] = $row['idUsers'];
                        $SESSION['userUId']
                    }
                }
            
                else{
                    header("location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
    }
    else {
        header("Location:../index.php");
        exit();
    }


