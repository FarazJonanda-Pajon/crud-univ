<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br>
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>