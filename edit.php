<?php
include_once "koneksi.php";
?>
<!DOCTYPE html>
<html>
<body>
	<table>
		<form action=" " method="post">
			<?php
					$id = $_GET['id'];
					$query ="SELECT * FROM mahasiswa WHERE id = '$id'";
					$result = mysqli_query($conn,$query);
					$data = mysqli_fetch_array($result);
			?>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
			</tr>
			<tr>
				<td>NIM :</td>
				<td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo $data['jenis_kelamin'] == "laki-laki" ? "checked" : ""; ?>>Laki-Laki<br>
					<input type="radio" name="jenis_kelamin" value="perempuan" <?php echo $data['jenis_kelamin'] == "perempuan" ? "checked" : ""; ?>>Perempuan
				</td>
			</tr>
			<tr>
				<td>Fakultas :</td>
				<td>
					<select name="fakultas">
						<option value="fit" <?php echo $data['fakultas'] == "fit" ? "selected=\"selected\"" : ""; ?>>Fakultas Ilmu Terapan</option>
						<option value="fik" <?php echo $data['fakultas'] == "fik" ? "selected=\"selected\"" : ""; ?>>Fakultas Industri Kreatif</option>
						<option value="fkb" <?php echo $data['fakultas'] == "fkb" ? "selected=\"selected\"" : ""; ?>>Fakultas Komunikasi Bisnis</option>
						<option value="feb" <?php echo $data['fakultas'] == "feb" ? "selected=\"selected\"" : ""; ?>>Fakultas Ekonomi Bisnis</option>
						<option value="fri" <?php echo $data['fakultas'] == "fri" ? "selected=\"selected\"" : ""; ?>>Fakultas Rekayasa Industri</option>
						<option value="fif" <?php echo $data['fakultas'] == "fif" ? "selected=\"selected\"" : ""; ?>>Fakultas Informatika</option>
						<option value="fte" <?php echo $data['fakultas'] == "fte" ? "selected=\"selected\"" : ""; ?>>Fakultas Teknik Elektro</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program Studi :</td>
				<td>
					<select name="program_studi">
						<option value="d3mi" <?php echo $data['fakultas'] == "d3mi" ? "selected=\"selected\"" : ""; ?>>Manajemen Informatika</option>
						<option value="d3tk" <?php echo $data['fakultas'] == "d3tk" ? "selected=\"selected\"" : ""; ?>>Teknik Komputer</option>
						<option value="d3if" <?php echo $data['fakultas'] == "d3if" ? "selected=\"selected\"" : ""; ?>>Informatika</option>
						<option value="d3tt" <?php echo $data['fakultas'] == "d3tt" ? "selected=\"selected\"" : ""; ?>>Teknik Telekomunikasi</option>
						<option value="d3ka" <?php echo $data['fakultas'] == "d3ka" ? "selected=\"selected\"" : ""; ?>>Komputerisasi Akuntansi</option>
						<option value="d3ph" <?php echo $data['fakultas'] == "d3ph" ? "selected=\"selected\"" : ""; ?>>Perhotelan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Asal :</td>
				<td><input type="text" name="asal" value="<?php echo $data['asal']; ?>"></td>
			</tr>
			<tr>
				<td>Moto Hidup :</td>
				<td><input type="text" name="moto_hidup" value="<?php echo $data['moto_hidup']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="edit" value="Update"></td>
			</tr>
		</form>
	</table>
</body>
</html>
<?php 
if (isset($_POST['edit'])) {
	$nama 			= $_POST['nama'];
	$nim 			= $_POST['nim'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$fakultas 		= $_POST['fakultas'];
	$program_studi	= $_POST['program_studi'];
	$asal 			= $_POST['asal'];
	$moto_hidup		= $_POST['moto_hidup'];
	$id				= $_POST['id'];
	$query = mysqli_query($conn, "UPDATE `mahasiswa` 
					SET 
					`nama`='$nama',
					`nim`='$nim',
					`jenis_kelamin`='$jenis_kelamin',
					`fakultas`='$fakultas',
					`program_studi`='$program_studi',
					`asal`='$asal',
					`moto_hidup`='$moto_hidup'
					WHERE `id`='$id'");
	if ($query) {
		header ("location: details.php");
	} else {
		echo "Error Dalam update Data!";
		echo "<a href='details.php'>Kembali</a>";
	}
}
?>
