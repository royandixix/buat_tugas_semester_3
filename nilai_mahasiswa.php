<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
</head>
<body>
    <h2>Data Nilai Mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
        </tr>
        <?php
        // Query untuk mengambil data dari tabel `nilai`
        $sql = "SELECT * FROM nilai";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0): 
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['tugas']; ?></td>
                    <td><?= $row['uts']; ?></td>
                    <td><?= $row['uas']; ?></td>
                    <td><?= $row['nilai_akhir']; ?></td>
                </tr>
            <?php endwhile; 
        else: ?>
            <tr>
                <td colspan="7">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>

    <br>
    
    <a href="utama.php">Kembali</a> |

</body>
</html>
