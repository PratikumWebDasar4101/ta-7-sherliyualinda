<?php
 include_once 'koneksi.php'; 
 ?>
<!DOCTYPE html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<br>
	<br>
	<br>
	<center >
		<h3>APLIKASI PENDAFTARAN MAHASISWA BARU</h3>
		<table bgcolor="pink">
			<?php
				$id = $_GET['id'];
				$query ="SELECT * FROM mahasiswa WHERE id = '$id'";
				$result = mysqli_query($conn,$query);
				$data = mysqli_fetch_array($result);
			?>
			<tr>
				<td>
					<label>Nama</label>
				</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label>NIM</label>
				</td>
				<td>
					<?php echo $data['nim']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label>Jenis Kelamin</label>
				</td>
				<td>
					<?php echo $data['jenis_kelamin']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label>Fakultas</label>
				</td>
				<td>
					<?php echo $data['fakultas']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label>Program Studi</label>
				</td>
				<td>
					<?php echo $data['program_studi']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label>Asal</label>
				</td>
				<td>
					<?php echo $data['asal']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label>Moto Hidup</label>
				</td>
				<td>
					<?php echo $data['moto_hidup']; ?>
				</td>
			</tr>
		</table>
	<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
</body>
</html>
