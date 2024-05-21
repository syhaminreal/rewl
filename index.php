<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="http://localhost/Final%20project/Home.php" class="btn btn-warning">Home</a>
        <a href="http://localhost/Final%20project/Back/c.index.php" class="btn btn-warning">Index</a>
        <a href="http://localhost/Final%20project/Back/view.php" class="btn btn-warning">View</a>
        <a href="http://localhost/Final%20project/Process.php" class="btn btn-warning">Process</a>
        <a href="http://localhost/Final%20project/registration.php" class="btn btn-warning">Register</a>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>