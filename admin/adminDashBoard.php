<?php include "../dbconn.php"; ?>

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
        <div class="col-md-3 text-end"> <a href="./logOut.php" type="button" class="btn btn-warning me-2">Admin Log Out</a>
            
        </div>
    </header>
    <main class="my-5 ">
        <h1 class="d-flex justify-content-center">ADMIN DASHBOARD</h1>
        <div class="container my-5">
            <a href="addNewUser.php" class="btn btn-primary mb-3">Add New User</a>
            <table class="table mt-2 w-75 mx-auto" name="users"  >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM user";
                    $res = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($res)>0){
                        while($row = mysqli_fetch_assoc($res)){
                            
                            echo "<tr>
                                    <td>".$row['id']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['gender']."</td>
                                    <td>".$row['city']."</td>
                                    <td>
                                        <a href='./userEdit.php?id=".$row['id']."' class='btn btn-sm btn-success'>Edit</a>
                                        <a href='./userDelete.php?id=".$row['id']."' class='btn btn-sm btn-danger'>Delete</a>
                                    </td>
                                </tr>";
                        }

                    }
                    ?>
                    
                </tbody>
            </table>
        </div>

    </main>
</body>

</html>