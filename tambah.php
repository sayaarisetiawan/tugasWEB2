<?php 
//koneksi dbms
$koneksi =mysqli_connect("localhost","root", "", "kendaraan");
//apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"])) {
//ambil data masing-masing form
    $Nama = $_POST["Nama"];
    $Tahun_Pembuatan= $_POST["Tahun_Pembuatan"];
    $Pembuat= $_POST["Pembuat"];
    $Distributor =$_POST["Distributor"];
//query insert ke database
$query= "INSERT INTO data_kendaraan VALUES('', '$Nama', '$Tahun_Pembuatan', '$Pembuat', '$Distributor')";
mysqli_query($koneksi, $query);

//cek apakah data berhasil ditambahkan atau tidak
if(mysqli_affected_rows($koneksi) > 0){
    echo "Data Berhasil Disimpan";
}else {
    echo " Data Gagal Disimpan";
    echo "<br>";
    echo mysqli_error($koneksi);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Kendaraan</title>
</head>
<body>
    <h1>Tambah Data Kendaraaan</h1>
    <form action="" method="POST">
    <ul>
        <li>
            <label for="Nama"> Nama : </label>
            <input type="text" name="Nama" id="Nama">
        </li>
        <li>
            <label for="Tahun_Pembuatan"> Tahun Pembuatan : </label>
            <input type="date" name="Tahun_Pembuatan" id="Tahun_Pembuatan">
        </li>
        <li>
            <label for="Pembuat"> Pembuat : </label>
            <input type="text" name="Pembuat" id="Pembuat">
        </li>
        <li>
            <label for="Distributor"> Distributor : </label>
            <input type="text" name="Distributor" id="Distributor">
        </li>
        
        <button type="submit" name="submit">Kirim</button>
        
        
    </ul>
    </form>
</body>
</html>