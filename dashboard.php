<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}


include 'includes/config.php';

// Ambil data transaksi dari database
$query = "SELECT * FROM transactions";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="container">
        <h2>Dashboard - SmartFinance</h2>
        <a href="pages/tambah.php"><button>Tambah Transaksi</button></a>
        <table>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td>Rp<?= number_format($row['jumlah'], 2, ',', '.'); ?></td>
                <td><?= $row['tanggal']; ?></td>
                <td>
                    <a href="pages/edit.php?id=<?= $row['id']; ?>">Edit</a> |
                    <a href="pages/hapus.php?id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <a href="logout.php"><button>Logout</button></a>
    </div>
</body>
</html>
