<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$notlp = $_POST['notlp'];
$jenis_donasi = $_POST['jenis_donasi'];
$alamat = $_POST['alamat'];
$metode_pembayaran = $_POST['metode_pembayaran'];

$sql = "INSERT INTO tb_donation (nama, notlp, jenis_donasi, alamat, metode_pembayaran)
        VALUES ('$nama', '$notlp', '$jenis_donasi', '$alamat', '$metode_pembayaran')";

if ($conn->query($sql) === TRUE) {
    echo "Donasi berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
