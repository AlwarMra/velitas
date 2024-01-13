<?php
include('connection.php');
$con = connection();

$id = $_POST['id'];
$name = isset($_POST['name']) ? $_POST['name'] : null;
$result = isset($_POST['result']) ? $_POST['result'] : null;

$sql = "UPDATE training SET name=?, result=? WHERE id=?";

$stmt = $con->prepare($sql);
$stmt->bind_param("ssi", $name, $result, $id);
$query = $stmt->execute();

if ($query) {
    Header("Location: index.php");
} else {
    echo "Error inserting record: " . mysqli_error($con);
}
$stmt->close();
