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

            <li><a href="./index.php" class="nav-link px-2">Travel LK Web Site</a></li>

        </ul>
        <div class="col-md-3 text-end"> <a href="./logout.php" type="button" class="btn btn-danger me-2">Log Out</a>
            
        </div>
    </header>
    <main class="my-5">
        <h1 class="welcome">Book a Hotel Here...</h1>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="./process.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="uemail" required>
                        </div>
                        <div class="mb-3">
                            <label for="hotel" >Hotel Name</label>
                            <select class="form-select" id="hotel" name="hotel">
                                <option value="" disabled selected>Select a hotel...</option>
                                <option value="Earls regency">Earls regency</option>
                                <option value="Cinnamon Grand">Cinnamon Grand</option>
                                <option value="Hilton">Hilton</option>
                                <option value="Mount lavinia hotel">Mount lavinia hotel</option>
                                <option value="Galle face hotel">Galle face hotel</option>
                                <option value="Queen s hotel">Queen s hotel</option>
                                
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="upass" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                        <a>Don't have an account? <a href="./register.php">Register here</a></a>
                    </form>
                </div>
            </div>
        
    </main>
</body>

</html>