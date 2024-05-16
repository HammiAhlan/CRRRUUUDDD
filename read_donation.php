<?php
include 'koneksi.php';

$sql = "SELECT * FROM tb_donation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - No. Telp: " . $row["notlp"]. " - Jenis Donasi: " . $row["jenis_donasi"]. " - Alamat: " . $row["alamat"]. " - Metode Pembayaran: " . $row["metode_pembayaran"]. "<br>";
    }
} else {
    echo "Tidak ada data donasi";
}

$conn->close();
?>
