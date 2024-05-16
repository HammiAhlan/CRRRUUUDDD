<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$notlp = $_POST['notlp'];
$jenis_donasi = $_POST['jenis_donasi'];
$alamat = $_POST['alamat'];
$metode_pembayaran = $_POST['metode_pembayaran'];

$sql = "UPDATE tb_donation SET nama='$nama', notlp='$notlp', jenis_donasi='$jenis_donasi', alamat='$alamat', metode_pembayaran='$metode_pembayaran' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data donasi berhasil diperbarui";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
