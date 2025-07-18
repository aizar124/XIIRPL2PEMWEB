<!-- mysqli_connect untuk mengkoneksi ke database -->
 <!-- mysqli_query untuk mengelola data table -->
  <!-- mysqli_fetch_assoc untuk menyimpan hasil retrieve ke dalam table -->

<?php
$conn = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "phpdasar");
// $query = query('SELECT * FROM mahasiswa');
echo "cek";
$result = mysqli_query($conn, 'SELECT * FROM mahasiswa');
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[]  =$row;
}





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
    <h2>Nama Mahasiswa : </h2>
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
        <?php foreach( $rows as $row) : ?>
        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nrp'] ?></td>
            <td>
                <img src="img/<?= $row['gambar'] ?>" width="50">
            </td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>