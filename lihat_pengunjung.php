<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="register.php">[+] Tambah Masakan</a>
	<?php 
	include("konek.php");
	$sql = "SELECT * FROM pengunjung";
	$query=mysqli_query($con,$sql);

	//cari
	if(isset($_POST['Cari']))
	{
		$keyword = ($_POST['keyword']);

		if ($keyword=='semua')
		{
		$sql = "SELECT * FROM pengunjung";
		$query=mysqli_query($con,$sql);

		}
		else if ($keyword=='Laki-laki')
		{
		$sql = "SELECT * FROM pengunjung WHERE jenis_kelamin='Laki-laki'";
		$query=mysqli_query($con,$sql);
		}
		else
		{
		$sql = "SELECT * FROM pengunjung WHERE jenis_kelamin='Perempuan'";
		$query=mysqli_query($con,$sql);
		}
	}
 	?>

<form method="POST" action="lihat_pengunjung.php">
	<select name="keyword">
		<option value="semua">Tampilkan Semua</option>
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	</select>
	<button name="Cari">Cari</button>
	
</form>
	 <table border="8">
	 	<thead>
	 		<tr>
	 			<th>id Pengunjung</th>
	 			<th>Nama Pengunjung</th>
	 			<th>alamat</th>
	 			<th>No.Telepon</th>
	 			<th>Jenis Kelamin</th>
	 			<th>Tanggal Lahir</th>
	 			<th>Edit/Delete</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php foreach ($query as $row): ?>
	 		<tr>
	 			<td><?= $row['id_pengunjung']; ?></td>
	 			<td><?= $row['nama_pengunjung']; ?></td>
	 			<td><?= $row['alamat']; ?></td>
	 			<td><?= $row['no_telepon']; ?></td>
	 			<td><?= $row['jenis_kelamin']; ?></td>
	 			<td><?= $row['tanggal_lahir']; ?></td>
	 			<td><?= "<a href='edit_pengunjung.php?id_pengunjung=$row[id_pengunjung]'>Edit</a> 
	 					 <a href='delete_pengunjung.php?id_pengunjung=$row[id_pengunjung]'>Delete</a>"; ?>
	 			
	 			</td>
	 		</tr>
	 	<?php endforeach; ?>
	 	</tbody>
	 </table>

</body>
</html>