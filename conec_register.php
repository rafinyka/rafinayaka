<?php

include 'konek.php';

if(isset($_POST['buat'])){

	
	$nama_pengunjung = $_POST['nama_pengunjung'];
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tanggal_lahir = $_POST['tanggal_lahir'];

	$sql = "INSERT INTO pengunjung VALUES('','$nama_pengunjung', '$alamat', '$no_telepon', '$jenis_kelamin', '$tanggal_lahir')";
	$query = mysqli_query($con,$sql);


	if($query){
		echo "
			BERHASIL
		";
	}

}


  ?> 	
  	<br/>
		 <a href="lihat_pengunjung.php">Lihat Pengunjung</a>