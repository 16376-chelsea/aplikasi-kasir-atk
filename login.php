
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Toko ATK</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="login-page">

    <div class="login-box">
        <h1>TOKO ATK</h1>
        <p>Aplikasi Kasir dan Manajemen Stok</p>

        <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username"
                   placeholder="Masukkan username" required>

            <label for="password">Password</label>
            <input type="password" id="password"
                   placeholder="Masukkan password" required>

            <button type="submit">Login</button>
            <p id="pesan"></p>
        </form>
    </div>

    <script src="assets/script.js"></script>
</body>
</html>
