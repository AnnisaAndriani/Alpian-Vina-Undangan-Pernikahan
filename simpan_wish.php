<?php
include 'koneksi.php';

$name = $_POST['name'];
$message = $_POST['message'];

if (!empty($name) && !empty($message)) {
    $stmt = $koneksi->prepare("INSERT INTO wishes (name, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $message);
    $stmt->execute();
    echo "Sukses";
} else {
    echo "Gagal: Data kosong";
}
?>
