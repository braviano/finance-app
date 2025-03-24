<?php
header("Content-Type: application/json");
include 'includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $query = "SELECT * FROM transactions";
    $result = mysqli_query($conn, $query);
    $transactions = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $transactions[] = $row;
    }

    echo json_encode($transactions);
}
?>
