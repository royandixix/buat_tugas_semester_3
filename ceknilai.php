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
    <title>Cek Nilai</title>
</head>
<body>
    <h1>Form Input Nilai</h1>
    <form action="hasil.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>
        <br>
        <label for="tugas">Nilai Tugas:</label>
        <input type="number" name="tugas" id="tugas" required>
        <br>
        <label for="uts">Nilai UTS:</label>
        <input type="number" name="uts" id="uts" required>
        <br>
        <label for="uas">Nilai UAS:</label>
        <input type="number" name="uas" id="uas" required>
        <br>
        <br>
        <button type="submit">Hitung Nilai</button>
    </form>

    <!-- Tombol Kembali -->
    <a href="utama.php">
        <button type="button">Kembali</button>
    </a>
</body>
</html>
