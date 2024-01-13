<?php
include('connection.php');
$con = connection();

$id = isset($_GET['id']) ? $_GET['id'] : null;
$sql = "DELETE FROM training WHERE id=?";

$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$query = $stmt->execute();

if ($query) {
    Header("Location: index.php");
} else {
    echo "Error inserting record: " . mysqli_error($con);
}
$stmt->close();
