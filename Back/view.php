<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Employee Details</title>
    <style>
        .employee-details {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Employee Details</h1>
            <div>
                <a href="c.index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="employee-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM employees WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_array($result)) {
            ?>
                    <h3>Name:</h3>
                    <p><?php echo $row["name"]; ?></p>
                    <h3>Position:</h3>
                    <p><?php echo $row["position"]; ?></p>
                    <h3>Department:</h3>
                    <p><?php echo $row["department"]; ?></p>
                    <h3>Hire Date:</h3>
                    <p><?php echo $row["hire_date"]; ?></p>
            <?php
                } else {
                    echo "<h3>No employee found</h3>";
                }
            } else {
                echo "<h3>No employee ID provided</h3>";
            }
            ?>
        </div>
    </div>
</body>
</html>


