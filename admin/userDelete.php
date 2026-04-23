<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location: ../adminlogin.php");
         exit();
    }
?>

<?php
    require "../dbconn.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        header("Location: ./adminDashBoard.php");
    }
    else{
        echo "Delete Failed...";
    }
?>