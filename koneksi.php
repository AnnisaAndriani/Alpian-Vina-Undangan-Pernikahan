<?php
$host = "localhost";
$user = "root";       // sesuaikan dengan username MySQL
$pass = "";           // sesuaikan dengan password MySQL
$db   = "undangan_web";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
