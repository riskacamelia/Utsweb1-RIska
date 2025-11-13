<?php
session_start();

if( !isset($_SESSION['username']) ) 
    header("Location: login.php");
    exit;
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$kode_barang = ["001", "002", "003", "004", "005"];
$nama_barang = ["Ayam penyet", "Mie Ayam", "Mie bagladesh", "jus", "es teh"];
$harga_barang = [15000, 12000, 20000, 5000, 8000];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dashboard</title>
</head>
<body>
    <h2>SELAMAT DATANG <?= $_SESSION['username'];?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>