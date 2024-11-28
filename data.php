<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbmahasiswa");
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Menangani form submit
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim  = isset($_POST["nim"]) ? (int)$_POST["nim"] : 0;
    $jurusan = $_POST["jurusan"];
    $tugas = isset($_POST["tugas"]) ? (int)$_POST["tugas"] : 0;
    $uts = isset($_POST["uts"]) ? (int)$_POST["uts"] : 0;
    $uas = isset($_POST["uas"]) ? (int)$_POST["uas"] : 0;
    $metode = $_POST["metode"];

    // Validasi input
    if (!empty($nama) && $nim > 0 && !empty($jurusan) && $tugas >= 0 && $uts >= 0 && $uas >= 0) {
        // Query untuk menyimpan data
        $query = "INSERT INTO daftarnilai (nama, nim, jurusan, tugas, uts, uas, metode) 
                  VALUES ('$nama', '$nim', '$jurusan', '$tugas', '$uts', '$uas', '$metode')";
        if (mysqli_query($conn, $query)) {
            echo "Data berhasil disimpan!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Input tidak valid. Pastikan semua data diisi dengan benar.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
</head>

<body>
    <h1>MASUKKAN DATA :</h1>
    <form action="" method="POST">
        <div>
            <label for="nama">NAMA :</label>
            <input type="text" name="nama" id="nama" required>
        </div><br>
        <div>
            <label for="nim">NIM :</label>
            <input type="text" name="nim" id="nim" required>
        </div><br>
        <div>
            <label for="jurusan">JURUSAN :</label>
            <select name="jurusan" id="jurusan" required>
                <option value="teknik informatika">Teknik Informatika</option>
                <option value="sistem informasi">Sistem Informasi</option>
                <option value="bisnis digital">Bisnis Digital</option>
            </select>
        </div><br>
        <div>
            <label for="tugas">TUGAS :</label>
            <input type="number" id="tugas" name="tugas" required>
        </div><br>
        <div>
            <label for="uts">UTS :</label>
            <input type="number" name="uts" id="uts" required>
        </div><br>
        <div>
            <label for="uas">UAS :</label>
            <input type="number" name="uas" id="uas" required>
        </div><br>
        <div>
            <label for="metode">METODE :</label>
            <select name="metode" id="metode" required>
                <option value="presentasi">Presentasi</option>
                <option value="non presentasi">Non Presentasi</option>
            </select>
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>