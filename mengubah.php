<!DOCTYPE html>
<html>
<head>
	<title>Pengeditan Data Mahasiswa</title>
</head>
<body>
	<h2>EDIT DATA MAHASISWA</h2>
 
	<?php
	include 'conect.php';
	$id = $_GET['id'];
	$data = mysqli_query($conect,"SELECT * FROM tbl_mhs2 WHERE id_mahasiswa='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="POST" action="ubah.php">
			<table>
				<tr>			
					<td>NIM</td>
					<td>
						<input type="hidden" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa']; ?>">
						<input type="number" name="nim" value="<?php echo $d['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA MAHASISWA</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama_mhs']; ?>"></td>
				</tr>
                <tr>
					<td>NAMA DOSEN</td>
					<td><input type="text" name="nama1" value="<?php echo $d['nama_dosen']; ?>"></td>
				</tr>
                <tr>
					<td>STATUS</td>
					<td><input type="text" name="st" value="<?php echo $d['st']; ?>"></td>
				</tr>
				<tr>
					<td>KETERANGAN</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['ket']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"> <button style="margin-left:10px;" href="index.php">KEMBALI</button></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
	
</body>
</html>