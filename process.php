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
            exit();
        }
        else{
            //echo "Login Failed...";
            header("Location: ./login.php");
            exit();
        }

    }
    //booking hotel
    if(isset($_POST['booking'])){
        //echo "booking success";
        $uemail=$_POST['uemail'];
        $hotel=$_POST['hotel'];
        $sdate=$_POST['startdate'];
        $edate=$_POST['enddate'];

        $sql= "INSERT INTO booking(uemail, hotel, startdate, enddate) VALUES ('$uemail','$hotel','$sdate','$edate');";

        $res=mysqli_query($conn, $sql) or die("Query Failed...");

        if($res){
            //echo "successfully Booked...";
            header("Location: ./index.php");
            exit();
        }
        else{
            //echo "Booking Failed...";
            header("Location: ./booking.php");
            exit();
        }

    }

    //admin login
    if(isset($_POST['adminlogin'])){    
        //echo "admin login success";
        $adminemail=$_POST['adminemail'];
        $adminpass=$_POST['adminpass'];

        $sql= "SELECT * FROM admin WHERE email='$adminemail' AND password='$adminpass';";
        $res=mysqli_query($conn, $sql) or die("Query Failed...");
        if(mysqli_num_rows($res)>0){
            $_SESSION['admin']=$adminemail;
            header("Location: ./admin/adminDashBoard.php");
            exit();
        }
        else{
            //echo "Login Failed...";
            header("Location: ./admin/adminlogin.php");
            exit();
        }   
    }
    //admin user register
    if(isset($_POST['adminUserRegister'])){
        //echo "admin user register success";
        $uname=$_POST['uname'];
        $uemail=$_POST['uemail'];
        $upass=$_POST['upass'];
        $ugender=$_POST['ugender'];
        $ucity=$_POST['ucity'];

        $sql= "INSERT INTO user(name, email, pw, gender, city) VALUES ('$uname','$uemail','$upass','$ugender','$ucity');";
        $res=mysqli_query($conn, $sql) or die("Query Failed...");
        if($res){
            //echo "successfully Registered...";
            header("Location: ./admin/adminDashBoard.php");
            exit();
        }
        else{
            //echo "Registration Failed...";
            header("Location: ./admin/addNewUser.php");
            exit();
        }   
    }
    //admin update user
    if(isset($_POST['adminUpdateUser'])){
        //echo "admin update user success";
        $id=$_POST['id'];
        $uname=$_POST['uname'];
        $uemail=$_POST['uemail'];
        $upass=$_POST['upass'];
        $ugender=$_POST['ugender'];
        $ucity=$_POST['ucity'];

        $sql= "UPDATE user SET name='$uname', email='$uemail', pw='$upass', gender='$ugender', city='$ucity' WHERE id='$id'";
        $res=mysqli_query($conn, $sql) or die("Query Failed...");
        if($res){
            //echo "successfully Updated...";
            header("Location: ./admin/adminDashBoard.php");
            exit();
        }
        else{
            //echo "Update Failed...";
            header("Location: ./admin/userEdit.php?id=$id");
            exit();
        }

    }

?>