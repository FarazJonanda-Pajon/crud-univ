<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id = $id";
if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
