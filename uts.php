<?php
include 'koneksiuts.php';

if (isset($_POST['kirim'])) {

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $asal = $_POST['asal'];
    $tanggal_naik = $_POST['tanggal_naik'];
    $tanggal_turun = $_POST['tanggal_turun'];
    $no_hp = $_POST['no_hp'];

    $sql = "INSERT INTO pendaki 
    (nama, umur, asal, tanggal_naik, tanggal_turun, no_hp)

    VALUES 
    ('$nama', '$umur', '$asal', '$tanggal_naik', '$tanggal_turun', '$no_hp')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data Pendaki Berhasil Ditambahkan";
    } else {
        echo "Data Pendaki Gagal Ditambahkan";
    }
}
?>