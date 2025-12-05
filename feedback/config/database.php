<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "tugas_database";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("koneksi gagal :" . mysqli_connect_error());
}
?>