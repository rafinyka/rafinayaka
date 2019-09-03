<?php
// include database connection file
include_once("konek.php");

// Get id from URL to delete that user
$id_pengunjung = $_GET['id_pengunjung'];

// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM pengunjung WHERE id_pengunjung=$id_pengunjung");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:lihat_pengunjung.php");
?>