<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Employee</title>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Employee</h1>
            <div>
                <a href="c.index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM employees WHERE id=$id";
                $result = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="form-element my-4">
                        <input type="text" class="form-control" name="name" placeholder="Employee Name" value="<?php echo $row["name"]; ?>" required>
                    </div>
                    <div class="form-element my-4">
                        <input type="text" class="form-control" name="position" placeholder="Position" value="<?php echo $row["position"]; ?>" required>
                    </div>
                    <div class="form-element my-4">
                        <input type="text" class="form-control" name="department" placeholder="Department" value="<?php echo $row["department"]; ?>" required>
                    </div>
                    <div class="form-element my-4">
                        <input type="date" class="form-control" name="hire_date" value="<?php echo $row["hire_date"]; ?>" required>
                    </div>
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <div class="form-element my-4">
                        <input type="submit" name="edit" value="Edit Employee" class="btn btn-primary">
                    </div>
            <?php
                } else {
                    echo "<h3>Employee Does Not Exist</h3>";
                }
            } else {
                echo "<h3>Employee ID not provided</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>
