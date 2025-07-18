<?php 
require "functions.php";

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <label for="nrp">NRP:</label>
        <input type="text" name="nrp" id="nrp"> <br>

        <label for="nrp">Nama:</label>
        <input type="text" name="nama" id="nama"> <br>
        
        <label for="nrp">Email:</label>
        <input type="text" name="email" id="enail"> <br>

        <label for="nrp">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan"> <br>

        <label for="gambar">Gambar</label>
        <input type="file" id="gambar" name="gambar" accept="image/*" required><br>

        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>