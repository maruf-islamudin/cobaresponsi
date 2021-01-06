<?php 
$koneksi = mysqli_connect("localhost","ruft","123","prak5");
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>