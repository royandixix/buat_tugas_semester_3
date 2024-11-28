<?php
$host = "localhost"; // Server database
$user = "root";      // Username database
$pass = "";          // Password database
$db   = "tugas_php"; // Nama database

// Koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
