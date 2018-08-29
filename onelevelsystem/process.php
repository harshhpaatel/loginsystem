<?php
require_once('connection.php');
session_start();

    if(isset($_POST['login'])) {
        if(empty($_POST['username']) || empty($_POST['password'])) {
            header("location:index.php?Empty= Please fill in all fields");
        }
        else {
            $query="select * from loginform where username='".$_POST['username']."' and password='".$_POST['password']."' limit 2";
            $result=mysqli_query($con, $query);
            
            if(mysqli_fetch_assoc($result)) {
                $_SESSION['User']=$_POST['username'];
                header("location:livestream.php");
            }
            else {
                header("location:index.php?Invalid= Invalid Username or Password");
            }
        }
    }
    else {
        echo 'If you see this, Please contact your lead!<br/>Error code: bapsprocess1';
    }

?>