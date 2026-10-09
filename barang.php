<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang - Latihan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Barang</h2>
        <div style="margin-bottom: 15px;">
            <a href="dashboard.html" class="nav-link" style="margin-right: 15px;">&larr; Kembali ke Dashboard</a>
            <a href="pegawai.php" class="nav-link">Lihat Data Pegawai &rarr;</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM barang_jualan");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['id_barang']; ?></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td> <?php echo number_format($data['harga']); ?></td>
                    <td><?php echo $data['stok']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>