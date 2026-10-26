function tampilkanTanggal() {
    const sekarang = new Date();
    document.getElementById("tanggal").textContent =
        sekarang.toLocaleDateString("id-ID");
}
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    document.getElementById("pesan").textContent =
        "Tampilan login berhasil diuji.";
});
