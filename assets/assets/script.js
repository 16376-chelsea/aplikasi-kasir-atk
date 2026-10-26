function tampilkanTanggalWaktu() {
    const sekarang = new Date();

    const tanggal = document.getElementById("tanggal");
    const waktu = document.getElementById("waktu");

    if (tanggal) {
        tanggal.textContent = sekarang.toLocaleDateString("id-ID", {
            day: "numeric",
            month: "long",
            year: "numeric"
        });
    }

    if (waktu) {
        waktu.textContent = sekarang.toLocaleTimeString("id-ID");
    }
}

tampilkanTanggalWaktu();
setInterval(tampilkanTanggalWaktu, 1000);


const formBarang = document.getElementById("formBarang");

if (formBarang) {
    formBarang.addEventListener("submit", function(event) {
        event.preventDefault();

        const nama = document.getElementById("nama").value.trim();
        const kategori = document.getElementById("kategori").value;
        const harga = Number(document.getElementById("harga").value);
        const stok = Number(document.getElementById("stok").value);
        const pesan = document.getElementById("pesanForm");

        if (nama === "" || kategori === "" ||
            harga <= 0 || stok < 0) {
            pesan.textContent = "Periksa kembali data yang diisi.";
            pesan.style.color = "red";
            return;
        }

        pesan.textContent =
            "Validasi berhasil. Data belum disimpan ke database.";
        pesan.style.color = "green";
    });
}


const loginForm = document.getElementById("loginForm");

if (loginForm) {
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value;
        const pesan = document.getElementById("pesan");

        if (username === "" || password === "") {
            pesan.textContent = "Username dan password wajib diisi.";
            pesan.style.color = "red";
            return;
        }

        pesan.textContent =
            "Input terisi. Autentikasi login belum diterapkan.";
        pesan.style.color = "green";
    });
}
