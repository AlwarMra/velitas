<?php
include('connection.php');
$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM training WHERE id='$id'";
$query = mysqli_query($con, $sql);
$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Update training</title>
</head>

<body>
    <div>
        <form action="edit_training.php" method="POST">
            <h1>Update training</h1>
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <input type="text" name="name" placeholder="Name" value="<?= $result['name'] ?>">
            <input type="text" name="result" placeholder="Result" value="<?= $result['result'] ?>">
            <input type="submit" value="Update">
        </form>
    </div>
</body>

</html>