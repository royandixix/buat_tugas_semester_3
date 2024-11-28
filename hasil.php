<?php
// Koneksi ke database (gunakan koneksi prosedural)
include 'koneksi.php'; // Pastikan file koneksi.php sudah ada dan benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    // Menghitung nilai akhir
    $nilai_akhir = ($tugas * 0.2) + ($uts * 0.4) + ($uas * 0.4);

    // Insert data ke database menggunakan query SQL
    $query = "INSERT INTO nilai (nama, nim, tugas, uts, uas, nilai_akhir) 
              VALUES ('$nama', '$nim', '$tugas', '$uts', '$uas', '$nilai_akhir')";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($conn);
    }
}

// Menutup koneksi
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hasil Nilai</title>
</head>
<body>
    <h1>Hasil Nilai</h1>
    <p>Nama: <?= htmlspecialchars($nama); ?></p>
    <p>NIM: <?= htmlspecialchars($nim); ?></p>
    <p>Nilai Akhir: <?= htmlspecialchars(number_format($nilai_akhir, 2)); ?></p>
    <a href="ceknilai.php">Kembali</a>
</body>
</html>
