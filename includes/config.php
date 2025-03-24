<?php
$host = "localhost";  // Server database (pakai XAMPP, jadi tetap localhost)
$user = "root";       // Default username MySQL di XAMPP
$pass = "";           // Default password MySQL di XAMPP (kosong)
$db   = "keuangan_pribadi";  // Nama database yang sudah dibuat

// Buat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
