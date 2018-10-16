<?php
include_once 'koneksi.php';
if (isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$fakultas = $_POST['fakultas'];
	$program_studi =$_POST['program_studi'];
	$asal =$_POST['asal'];
	$moto_hidup = $_POST['moto_hidup'];

	$query = "UPDATE mahasiswa 
				SET nama='$nama',
					nim='$nim',
					jenis_kelamin='$jenis_kelamin',
					fakultas='$fakultas',
					program_studi='$program_studi',
					asal='$asal',
					moto_hidup='moto_hidup' 
				WHERE id='$id'";



	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		header("location: detail.php");
	}else{
		echo mysql_error($conn);
		echo "<a href='edit.php'>Kembali</a>";
	}
}
  ?>