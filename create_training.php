<?php
include('connection.php');
$con = connection();

$name = isset($_POST['name']) ? $_POST['name'] : null;
$result = isset($_POST['result']) ? $_POST['result'] : null;

if (!empty($name)) {
    $sql = "INSERT INTO training (name, result) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $name, $result);
    $query = $stmt->execute();
    if ($query) {
        header("Location: index.php");
    } else {
        echo "Error inserting record: " . mysqli_error($con);
    }
    $stmt->close();
} else {
    echo "Name cannot be empty";
}
