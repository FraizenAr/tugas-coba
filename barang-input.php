<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <a href="barang.php" class="nav-link" style="margin-right: 15px;">&larr; Kembali ke Daftar Barang</a>
    <form action="barang-input-aksi.php" method="POST">
        <table>
            <tr>
                <td>ID Barang</td>
                <td><input type="text" name="id_barang" id=""></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" id=""></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="harga" id=""></td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td><input type="text" name="stok" id=""></td>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
        
</body>
</html>