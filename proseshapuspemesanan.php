<?php
    // Include koneksi ke database
    include("lib/database.php");

    // Membuat objek database
    $db = new Database();

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        $data = $db->delete("tbl_transaksi", $id);

        header("Location: daftarpemesanan.php?status=$data");
        exit;
    }
?>