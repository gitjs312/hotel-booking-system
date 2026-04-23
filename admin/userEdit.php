<?php
    session_start();
    if(!isset($_SESSION['admin'])){
        header("Location: ../adminlogin.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0"> <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg> </a> </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

            <li><a href="../index.php" class="nav-link px-2">Travel LK Web Site</a></li>

        </ul>
        <div class="col-md-3 text-end"> <a href="./adminDashBoard.php" type="button" class="btn btn-warning me-2">Back To Dash Board</a>
            
        </div>
    </header>
    <main class="my-5">
        <h1 class="welcome text-center">ADMIN USER UPDATE</h1>

        <?php
            require "../dbconn.php";
            $id = $_GET['id'];
            $sql = "SELECT * FROM user WHERE id='$id'";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="../process.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="mb-3">
                            <label>name : </label>
                            <input type="text" class="form-control" id="name" name="uname" value="<?php echo $row['name']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label>Email Address :</label>
                            <input type="email" class="form-control" id="email" name="uemail" value="<?php echo $row['email']; ?>" >
                        </div>
                        <div class="mb-3">
                            <label>Password : </label>
                            <input type="text" class="form-control" id="password" name="upass" value="<?php echo $row['pw']; ?>" hidden >
                        </div>
                        <div class="mb-3">
                            <label>Enter your Gender :</label><br><br>

                            <input type="radio" name="ugender" value="male"
                            <?php if($row['gender']=="male") echo "checked"; ?>> Male

                            <input type="radio" name="ugender" value="female"
                            <?php if($row['gender']=="female") echo "checked"; ?>> Female
                        </div>
                        <div class="mb-3">
                            <label>Enter your City : </label>
                            <input type="text" class="form-control" id="city" name="ucity" value="<?php echo $row['city']; ?>" >
                        </div>
                        <button type="submit" class="btn btn-success" name="adminUpdateUser">Admin Update User</button>
                        <a>Already have an account? <a href="./login.php">Login</a></a>
                    </form>
                     <?php
                    
            }
            ?>
                </div>
            </div>
        
    </main>
</body>

</html>