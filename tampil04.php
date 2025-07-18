<?php
$nama = "Mahasiswa01";
$nrp = "1234567890";
$email = "mahasiswa01@gmail.com";
$jurusan = "Teknik Informatika";
$gambar = "ireng.jpg";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tampilan Tabel MySQL</h1>
    <h2>Nama Mahasiswa : <?= $nama; ?></h2>
    <hr>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Gambar</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><?= $nama; ?></td>
            <td><?= $nrp ?></td>
            <td>
                <img src="img/<?= $gambar ?>" width="50">
            </td>
            <td><?= $email ?></td>
            <td><?= $jurusan ?></td>
            
        </tr>
    </table>
</body>
</html>