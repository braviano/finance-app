<?php
session_start();
include 'includes/config.php';

$id = $_GET['id'];
$query = "SELECT * FROM transactions WHERE id='$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $query = "UPDATE transactions SET kategori='$kategori', jumlah='$jumlah', tanggal='$tanggal' WHERE id='$id'";
    mysqli_query($conn, $query);
    header("Location: dashboard.php");
}
?>

<h2>Edit Transaksi</h2>
<form method="POST">
    <input type="text" name="kategori" value="<?= $data['kategori']; ?>" required>
    <input type="number" name="jumlah" value="<?= $data['jumlah']; ?>" required>
    <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required>
    <button type="submit">Simpan</button>
</form>
<a href="dashboard.php">Kembali</a>
