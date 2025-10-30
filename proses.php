<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Pengguna</title>
</head>
<body>
    <h2>Hasil Data yang Dikirim</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]) : "";
        $alamat = isset($_POST["alamat"]) ? htmlspecialchars($_POST["alamat"]) : "";
        $tanggal_lahir = isset($_POST["tanggal_lahir"]) ? htmlspecialchars($_POST["tanggal_lahir"]) : "";
        $jenis_kelamin = isset($_POST["jenis_kelamin"]) ? htmlspecialchars($_POST["jenis_kelamin"]) : "";

        if (empty($nama) || empty($alamat) || empty($tanggal_lahir) || empty($jenis_kelamin)) {
            echo "<p style='color:red;'>⚠️ Maaf, semua data harus diisi!</p>";
            echo "<a href='form.html'>Kembali ke Formulir</a>";
        } else {
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            echo "<hr>";
            echo "<a href='form.html'>← Kembali ke Formulir</a>";
        }

    } else {
        echo "<p>Akses ditolak. Silakan isi formulir terlebih dahulu.</p>";
        echo "<a href='form.html'>Kembali ke Formulir</a>";
    }
    ?>
</body>
</html>
