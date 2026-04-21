<?php

    require('./dbconn.php');
    session_start();

    //user registration

    if(isset($_POST['register'])){
        //echo "register success";
        $uname=$_POST['uname'];
        $uemail=$_POST['uemail'];
        $upass=$_POST['upass'];
        $ugender=$_POST['ugender'];
        $ucity=$_POST['ucity'];

        $sql= "INSERT INTO user(name, email, pw, gender, city) VALUES ('$uname','$uemail','$upass','$ugender','$ucity');";

        $res=mysqli_query($conn, $sql) or die("Query Failed...");

        if($res){
            echo "successfully Registered...";
            header("Location: ./login.php");
        }
        else{
            echo "Registration Failed...";
            header("Location: ./register.php");
        }

    }
    //user login
    if(isset($_POST['login'])){
        //echo "login success";
        $uemail=$_POST['uemail'];
        $upass=$_POST['upass'];

        $sql= "SELECT * FROM user WHERE email='$uemail' AND pw='$upass';";

        $res=mysqli_query($conn, $sql) or die("Query Failed...");

        if(mysqli_num_rows($res)>0){
            //echo "successfully Login...";
            $_SESSION['user']=$uemail;
            header("Location: ./booking.php");
            
        }
        else{
            //echo "Login Failed...";
            header("Location: ./login.php");
        }

    }
?>