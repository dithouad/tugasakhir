<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $no_telp = htmlspecialchars($_POST["no_telp"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $metode_pembayaran = htmlspecialchars($_POST["metode_pembayaran"]);
    $paket = htmlspecialchars($_POST["paket"]);
    $harga = htmlspecialchars($_POST["harga"]);

    $order = "Nama: $nama\nNomor Telepon: $no_telp\nAlamat: $alamat\nMetode Pembayaran: $metode_pembayaran\nPaket: $paket\nHarga: Rp$harga\n\n";

    $file = "pesanan.txt";
    if (file_put_contents($file, $order, FILE_APPEND | LOCK_EX)) {
        header("Location: pesanberhasil.html");
        exit;
    } else {
        header("Location: pesangagal.html");
        exit;
    }
} else {
    header("Location: pesangagal.html");
    exit;
}
?>
