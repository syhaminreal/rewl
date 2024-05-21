<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM employees WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = " Deleted Successfully!";
    header("Location:c.index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Emp does not exist";
}
?>