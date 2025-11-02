<?php
// api-list.php
header('Content-Type: application/json'); // Penting! Beritahu browser ini adalah JSON
include("config.php");

$data_siswa = array(); // Siapkan array kosong

$sql = "SELECT * FROM calon_siswa";
$query = mysqli_query($db, $sql);

while($siswa = mysqli_fetch_assoc($query)){ // Gunakan fetch_assoc untuk nama kolom
	$data_siswa[] = $siswa; // Masukkan setiap baris siswa ke array
}

// Cetak array sebagai JSON
echo json_encode($data_siswa);
?>