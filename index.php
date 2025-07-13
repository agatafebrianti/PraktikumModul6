<?php
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk - Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f0f8ff;">
<div class="container mt-5">
    <h2 class="text-center mb-4 text-primary">Daftar Produk Toko Online</h2>
    <a href="tambah.php" class="btn btn-success mb-3">+ Tambah Produk Baru</a>
    <table class="table table-bordered table-hover bg-white">
        <thead class="table-primary text-center">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr class="text-center">
                <td><?= $row['id_produk'] ?></td>
                <td><?= $row['nama_produk'] ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
                <td><?= $row['stok'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id_produk'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $row['id_produk'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
