<?php
// proses-edit.php (Versi API)
header('Content-Type: application/json');
include("config.php");

// Siapkan balasan default
$response = array(
    'status' => 'gagal',
    'message' => 'Akses dilarang. Formulir tidak disubmit.'
);

// Cek apakah tombol 'simpan' (dari form edit) telah disubmit?
if(isset($_POST['simpan'])){
	
	// Ambil data dari formulir
	$id = $_POST['id']; // PENTING: ambil ID
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	
	// Buat query update
	$sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// Apakah query update berhasil?
	if( $query ) {
		// Jika berhasil, ubah balasan
		$response['status'] = 'sukses';
		$response['message'] = 'Data siswa berhasil diperbarui!';
	} else {
		// Jika gagal, berikan pesan error dari database
		$response['message'] = 'Gagal menyimpan perubahan: ' . mysqli_error($db);
	}
	
}

// Cetak balasan sebagai JSON
echo json_encode($response);
?>