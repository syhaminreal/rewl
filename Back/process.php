<?php
include('connect.php');

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $position = mysqli_real_escape_string($conn, $_POST["position"]);
    $department = mysqli_real_escape_string($conn, $_POST["department"]);
    $hire_date = mysqli_real_escape_string($conn, $_POST["hire_date"]);
    $sqlInsert = "INSERT INTO employees (name, position, department, hire_date) VALUES ('$name', '$position', '$department', '$hire_date')";
    if(mysqli_query($conn, $sqlInsert)){
        session_start();
        $_SESSION["create"] = "Employee Added Successfully!";
        header("Location: c.index.php");
    } else {
        die("Something went wrong: " . mysqli_error($conn));
    }
}

if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $position = mysqli_real_escape_string($conn, $_POST["position"]);
    $department = mysqli_real_escape_string($conn, $_POST["department"]);
    $hire_date = mysqli_real_escape_string($conn, $_POST["hire_date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE employees SET name = '$name', position = '$position', department = '$department', hire_date = '$hire_date' WHERE id='$id'";
    if(mysqli_query($conn, $sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Employee Updated Successfully!";
        header("Location: c.index.php");
    } else {
        die("Something went wrong: " . mysqli_error($conn));
    }
}
?>
