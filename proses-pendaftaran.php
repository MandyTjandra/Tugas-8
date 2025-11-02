<?php

// Beritahu browser bahwa ini adalah file JSON, bukan HTML
header('Content-Type: application/json');

// Sertakan file koneksi database
include("config.php");

// Siapkan array balasan default
$response = array(
    'status' => 'gagal',
    'message' => 'Akses dilarang. Formulir tidak disubmit.'
);

// Cek apakah tombol 'daftar' (dari form) telah disubmit?
if(isset($_POST['daftar'])){
	
	// Ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	
	// Buat query SQL untuk memasukkan data
	// PENTING: Kode ini rentan terhadap SQL Injection. 
	// Untuk proyek nyata, gunakan 'prepared statements'.
	$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
	$query = mysqli_query($db, $sql);
	
	// Cek apakah query simpan berhasil?
	if( $query ) {
		// Jika berhasil, ubah balasan
		$response['status'] = 'sukses';
		$response['message'] = 'Pendaftaran siswa baru berhasil!';
	} else {
		// Jika gagal, berikan pesan error dari database
		$response['status'] = 'gagal';
		$response['message'] = 'Pendaftaran gagal: ' . mysqli_error($db);
	}
	
}

// Cetak balasan sebagai JSON
echo json_encode($response);

?>