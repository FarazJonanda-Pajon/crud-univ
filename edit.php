<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$result = $conn->query($sql);
$mahasiswa = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jurusan = '$jurusan' WHERE id = $id";
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
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h1>Edit Mahasiswa</h1>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required><br>
        <label>NIM:</label><br>
        <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" required><br>
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>