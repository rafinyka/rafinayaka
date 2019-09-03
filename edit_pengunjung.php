<?php 
include("konek.php");

if (isset($_POST['update']))
{
	$id_pengunjung = $_POST['id_pengunjung'];
	$nama_pengunjung = $_POST['nama_pengunjung'];
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

	$result = mysqli_query($con, "UPDATE pengunjung SET nama_pengunjung='$nama_pengunjung',alamat='$alamat',no_telepon='$no_telepon',jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir' WHERE id_pengunjung=$id_pengunjung");

	header("Location: lihat_pengunjung.php");

}
?>

<?php

$id_pengunjung = $_GET['id_pengunjung'];

$result = mysqli_query($con, "SELECT * FROM pengunjung WHERE id_pengunjung=$id_pengunjung");

while($user_data = mysqli_fetch_array($result))
{
    $id_pengunjung = $user_data['id_pengunjung'];
    $nama_pengunjung = $user_data['nama_pengunjung'];
    $alamat = $user_data['alamat'];
    $no_telepon = $user_data['no_telepon'];
    $jenis_kelamin = $user_data['jenis_kelamin'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
}
 ?>
 <html>
<head> 
    <title></title>
</head>

<body>
    <a href="lihat_pengunjung.php">Lihat Pengunjung</a>
    <br/><br/>

    <form name="update_pengunjung" method="post" action="edit_pengunjung.php">
        <table border="0">
            <tr> 
                <td>Nama Masakan</td>
                <td><input type="text" name="nama_pengunjung" value=<?php echo $nama_pengunjung;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"  rows="10" value=<?php echo $alamat;?>></td>
            </tr>
             <tr> 
                <td>No.Telepon</td>
                <td><input type="number" name="no_telepon" value=<?php echo $no_telepon;?>></td>
            </tr>
             <tr>
            <td>
            <div>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
            
                   

                <select name="jenis_kelamin" id="jenis_kelamin">
                    
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>

                </select>
                </div>
            </td>
                </tr>
             <tr> 
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>></td>
            </tr>
           
                <td><input type="hidden" name="id_pengunjung" value=<?php echo $_GET['id_pengunjung'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
</html>