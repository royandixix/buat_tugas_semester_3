<?php include 'koneksi.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Users</title>
</head>

<body>
    <h2>Data Users</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password (Hash)</th>
        </tr>
        <?php

        $sql = "SELECT * FROM users"; // Sesuaikan nama tabel
        $result = $conn->query($sql);

        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                </tr>
            <?php endwhile;
        else: ?>
            <tr>
                <td colspan="3">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>
    <br>
    
    <a href="utama.php">
        <button type="button">Kembali</button>
    </a>
</body>

</html>