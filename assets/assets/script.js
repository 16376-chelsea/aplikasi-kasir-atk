function tampilkanTanggal() {
    const sekarang = new Date();
    document.getElementById("tanggal").textContent =
        sekarang.toLocaleDateString("id-ID");
}
