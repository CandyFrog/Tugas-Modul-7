<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Terkirim</title>
</head>
<body>
    <h1>Terima Kasih Telah Mengisi Formulir!</h1>

    <?php
        if (
            isset($_POST['nama']) &&
            isset($_POST['alamat']) &&
            isset($_POST['tanggal_lahir']) &&
            isset($_POST['jenis_kelamin'])
        ) {
            $nama = htmlspecialchars($_POST['nama']);
            $alamat = htmlspecialchars($_POST['alamat']);
            $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
            $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);

            if ($nama && $alamat && $tanggal_lahir && $jenis_kelamin) {
                echo "<p><strong>Nama:</strong> $nama</p>";
                echo "<p><strong>Alamat:</strong> $alamat</p>";
                echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
                echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
            } else {
                echo "<p style='color:red;'>Maaf, semua data harus diisi dengan lengkap.</p>";
            }
        } else {
            echo "<p style='color:red;'>Maaf, terjadi kesalahan. Data tidak lengkap atau tidak dikirim dengan benar.</p>";
        }
    ?>

    <a href="form.html">Kembali ke Formulir</a>
</body>
</html>