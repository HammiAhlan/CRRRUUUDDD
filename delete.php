<?php
include 'koneksi.php';

$id = $_POST['id'];

$sql = "DELETE FROM tb_donation WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data donasi berhasil dihapus";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
