<?php
// api-hapus.php
header('Content-Type: application/json');
include("config.php");

$response = array('status' => 'gagal', 'message' => 'ID tidak ditemukan');

if( isset($_GET['id']) ){
	$id = $_GET['id'];
	
	$sql = "DELETE FROM calon_siswa WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	if( $query ){
		$response['status'] = 'sukses';
		$response['message'] = 'Data berhasil dihapus';
	} else {
		$response['message'] = 'Gagal menghapus data: '.mysqli_error($db);
	}
}

echo json_encode($response);
?>