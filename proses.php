<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $domain = $_POST["domain"];
    $warna = $_POST["warna"];

    // Simpan nilai-nilai ini ke database atau penyimpanan lainnya
    // (Pada contoh ini, kita hanya akan menampilkannya)

    // Redirect kembali ke halaman utama atau lakukan sesuatu yang sesuai
    header("Location: index.html");
    exit();
}
?>
