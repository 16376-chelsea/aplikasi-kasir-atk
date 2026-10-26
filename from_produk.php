<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang - Toko ATK</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <h1>Form Tambah/Edit Barang</h1>
    <p>Masukkan informasi barang yang akan dikelola.</p>

    <nav>
        <a href="dashboard.php">Dashboard</a> |
        <a href="produk.php">Daftar Barang</a> |
        <a href="form_produk.php">Tambah Barang</a>
    </nav>

    <hr>

    <form id="formBarang">
        <label for="nama">Nama Barang</label><br>
        <input type="text" id="nama" name="nama"
               placeholder="Masukkan nama barang" required>
        <br><br>

        <label for="kategori">Kategori</label><br>
        <select id="kategori" name="kategori" required>
            <option value="">Pilih kategori</option>
            <option value="Buku">Buku</option>
            <option value="Alat Tulis">Alat Tulis</option>
            <option value="Perlengkapan">Perlengkapan</option>
        </select>
        <br><br>

        <label for="harga">Harga Barang (Rp)</label><br>
        <input type="number" id="harga" name="harga"
               min="1" placeholder="Masukkan harga" required>
        <br><br>

        <label for="stok">Jumlah Stok</label><br>
        <input type="number" id="stok" name="stok"
               min="0" placeholder="Masukkan jumlah stok" required>
        <br><br>

        <button type="submit">Simpan</button>
        <a href="produk.php">
            <button type="button">Batal</button>
        </a>

        <p id="pesanForm"></p>
    </form>

    <script src="assets/script.js"></script>
</body>
</html>



    
       
    

    
             
