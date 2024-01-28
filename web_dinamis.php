<?php
// Ambil preferensi pengguna dari database atau tempat penyimpanan lainnya
$preferensi_pengguna = json_decode(file_get_contents("ambil_preferensi.php"), true);

$domain = $preferensi_pengguna["domain"];
$warna = $preferensi_pengguna["warna"];

// Bangun halaman web dinamis berdasarkan preferensi pengguna
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($domain); ?> Web</title>
    <style>
        body {
            background-color: <?php echo $warna; ?>;
            /* Gaya lainnya sesuai preferensi pengguna */
        }
    </style>
</head>
<body>
    <h1>Selamat datang di <?php echo ucfirst($domain); ?> Web!</h1>
    <!-- Konten dinamis lainnya sesuai preferensi pengguna -->
</body>
</html>
