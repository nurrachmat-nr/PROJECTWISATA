<?php 
//fungsi untuk cek status, merubah status menjadi Ya atau Tidak 
function cekStatus($status){
    return ($status == "1") ? "Ya" : "Tidak";
}

//fungsi untuk konversi tanggal
function konversiTanggal($date){
    $tanggal = date("Y-m-d", strtotime($date));
    $bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

//fungsi untuk menampilkan nominal dalam rupiah
function rp($nominal){
    return "Rp " . number_format($nominal, 2, ",", ".");
}
?>