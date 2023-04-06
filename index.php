<?php 
require 'function.php';
$kendaraan = query("SELECT * FROM data_kendaraan");
//ambil data dari database
$result = mysqli_query($koneksi, "SELECT * FROM data_kendaraan");
// var_dump($result);

//ambil data  (fetch) dari objek result

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Kendaraan</h1>
    <a href="tambah.php">Tambah Data Kendaraan</a>
    <br></br>
    <table  border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Tahun Pembuatan</th>
            <th>Pembuat</th>
            <th>Distributor</th>
        </tr>
        
        <?php $i=1;?>
        <?php foreach ($kendaraan as $row) : ?>
        <tr>
            <td> <?= $i?> </td>
            <td>
            <a href="">Lihat</a>
            <a href="">Tutup</a>
            </td>
            <td> <?= $row['Nama'] ?> </td>
            <td><?= $row['Tahun_Pembuatan'] ?></td>
            <td><?= $row['Pembuat'] ?></td>
            <td><?= $row['Distributor'] ?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>
</html>