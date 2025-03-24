<?php
session_start();
include '../includes/config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO transactions (user_id, kategori, jumlah, tanggal) VALUES ('$user_id', '$kategori', '$jumlah', '$tanggal')";
    mysqli_query($conn, $query);
    header("Location: ../dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Transaksi</h2>
        <form method="POST">
            <input type="text" name="kategori" placeholder="Kategori" required>
            <input type="number" name="jumlah" placeholder="Jumlah" required>
            <input type="date" name="tanggal" required>
            <button type="submit">Tambah</button>
        </form>
        <a href="../dashboard.php"><button>Kembali</button></a>
    </div>
</body>
</html>
