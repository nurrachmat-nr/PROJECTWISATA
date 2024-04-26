<?php
// Include koneksi ke database
include("lib/database.php");
include("lib/utils.php");

// Membuat objek database
$db = new Database();

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai-nilai dari form
    $nama_pemesan = $_POST["nama_pemesan"];
    $nomor_hp = $_POST["nomor_hp"];
    // $tanggal_pemesanan = $_POST["tanggal_pemesanan"];
    $durasi_perjalanan = $_POST["durasi_perjalanan"];
    $jumlah_peserta = $_POST["jumlah_peserta"];
    $paket_wisata = $_POST["paket_wisata"];
    $penginapan = $_POST["penginapan"];
    $transportasi = $_POST["transportasi"];
    $makanan = $_POST["makanan"];
    $diskon = $_POST["diskon"];
    $total_harga = $_POST["total_harga"];

    // Menyiapkan data untuk diinsert ke database
    $data = array(
        "nama_pemesan" => $nama_pemesan,
        "nomor_hp" => $nomor_hp,
        "durasi" => $durasi_perjalanan,
        "jumlah_peserta" => $jumlah_peserta,
        "penginapan" => $penginapan,
        "transportasi" => $transportasi,
        "makanan" => $makanan,
        "diskon" => $diskon,
        "total_harga" => $total_harga,
    );

    // Menjalankan fungsi insertData dari objek database
    $result = $db->insertData("tbl_transaksi", $data);
    // Periksa apakah data berhasil disimpan atau tidak
    if ($result === true) {
        writeLog("Form berhasil disubmit");
        // Redirect ke halaman daftar pemesanan dengan pesan sukses
        header("Location: daftarpemesanan.php");
        exit;
    }
} else {
    writeLog("Form gagal disubmit");
    echo "Form gagal disubmit";
}
?>
