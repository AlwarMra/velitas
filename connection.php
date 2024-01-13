<?php
function connection()
{
    $host = "localhost";
    $user = "root";
    $pass = "fantasy93";

    $db = "velites";
    $connect = mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $db);
    return $connect;
}
