<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Utama</title>
</head>
<body>
    <header>
        <h1>Selamat Datang, <?= htmlspecialchars($_SESSION['username']); ?>!</h1>
    </header>
    <nav>
        <a href="ceknilai.php">Input Data</a> |
        <a href="nilai_mahasiswa.php">Cek Nilai</a> |
        <a href="users.php">Data Pengguna</a> |
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>
