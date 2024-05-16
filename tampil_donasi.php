<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Donation</title>
</head>
<body>
    <h1>Data Donation</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No. Telp</th>
            <th>Jenis Donasi</th>
            <th>Alamat</th>
            <th>Metode Pembayaran</th>
        </tr>
        <?php
        include 'read_donation.php';
        ?>
    </table>
    <h2>Input Donation Baru</h2>
    <form action="create_donation.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="notlp">No. Telp:</label><br>
        <input type="text" id="notlp" name="notlp" required><br>
        <label for="jenis_donasi">Jenis Donasi:</label><br>
        <input type="text" id="jenis_donasi" name="jenis_donasi" required><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br>
        <label for="metode_pembayaran">Metode Pembayaran:</label><br>
        <input type="text" id="metode_pembayaran" name="metode_pembayaran" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
