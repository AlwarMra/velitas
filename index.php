<?php
include('connection.php');
$con = connection();
$sql = "SELECT * FROM training";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Velites test</title>
</head>

<body>
    <div>
        <form action="create_training.php" method="POST">
            <h1>Create training</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="result" placeholder="Result">
            <input type="submit" value="Add">
        </form>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Result</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['result'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>">Edit</a></th>
                        <th><a href="delete_training.php?id=<?= $row['id'] ?>">Delete</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>


</body>

</html>