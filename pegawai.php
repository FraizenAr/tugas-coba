<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai - Latihan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Pegawai</h1>
        <div style="margin-bottom: 15px;">
            <a href="dashboard.html" class="nav-link" style="margin-right: 15px;">&larr; Kembali ke Dashboard</a>
            <a href="barang.php" class="nav-link">Lihat Data Barang &rarr;</a>
        </div>
         <table>
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM pegawai");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
         </table>
    </div>

</body>
</html>