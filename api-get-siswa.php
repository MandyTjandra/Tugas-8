<?php
// api-get-siswa.php
header('Content-Type: application/json');
include("config.php");

// Siapkan balasan default
$response = array(
    'status' => 'gagal',
    'message' => 'ID tidak ditemukan atau tidak valid',
    'data' => null
);

if( isset($_GET['id']) ){
	
	$id = $_GET['id'];
	
	// Buat query untuk ambil 1 data
	$sql = "SELECT * FROM calon_siswa WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
    // Cek apakah data ditemukan
	if( mysqli_num_rows($query) > 0 ){
        $siswa = mysqli_fetch_assoc($query); // Ambil datanya
        
        $response['status'] = 'sukses';
        $response['message'] = 'Data ditemukan';
        $response['data'] = $siswa; // Kirim datanya
	} else {
        $response['message'] = 'Data dengan ID ' . $id . ' tidak ditemukan.';
    }
	
}

// Cetak balasan sebagai JSON
echo json_encode($response);
?>