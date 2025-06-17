<?php
include 'koneksi.php';

$sql = "SELECT name, message FROM wishes ORDER BY created_at DESC";
$result = $koneksi->query($sql);

$wishes = array();
while ($row = $result->fetch_assoc()) {
    $wishes[] = $row;
}

echo json_encode($wishes);
?>
