<?php
include 'includes/config.php';
$id = $_GET['id'];

$query = "DELETE FROM transactions WHERE id='$id'";
mysqli_query($conn, $query);
header("Location: dashboard.php");
?>
