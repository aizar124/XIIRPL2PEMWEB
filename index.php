
<?php
$conn = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "pwpb");
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
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/ireng.jpeg" width="50">
            </td>
            <td>0011122233</td>
            <td>NamaKe01</td>
            <td>email01@gmail.com</td>
            <td>Jurnalistik</td>
        </tr>
    </table>
</body>
</html>