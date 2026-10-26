
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang - Toko ATK</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <h1>Daftar Barang Toko ATK</h1>
    <p>Kelola data produk dan stok barang toko.</p>

    <nav>
        <a href="dashboard.php">Dashboard</a> |
        <a href="produk.php">Daftar Barang</a> |
        <a href="form_produk.php">Tambah Barang</a>
    </nav>

    <hr>

    <h2>Data Barang</h2>

    <input type="text" id="cariBarang"
           placeholder="Cari nama barang...">

    <a href="form_produk.php">
        <button type="button">+ Tambah Barang</button>
    </a>

    <table border="1" cellpadding="10" cellspacing="0"
           style="width:100%; margin-top:20px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="daftarBarang">
            <tr>
                <td>1</td>
                <td>Buku Tulis</td>
                <td>Buku</td>
                <td>Rp5.000</td>
                <td>50</td>
                <td>
                    <a href="form_produk.php">Edit</a> |
                    <button type="button"
                            onclick="alert('Fitur hapus akan dikembangkan selanjutnya.')">
                        Hapus
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pulpen</td>
                <td>Alat Tulis</td>
                <td>Rp3.000</td>
                <td>30</td>
                <td>
                    <a href="form_produk.php">Edit</a> |
                    <button type="button"
                            onclick="alert('Fitur hapus akan dikembangkan selanjutnya.')">
                        Hapus
                    </button>
                </td>
            </tr>
        </tbody>
    </table>

    <script src="assets/script.js"></script>
</body>
</html>
