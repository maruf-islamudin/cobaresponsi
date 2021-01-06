<?php
include "connect.php";
if(isset($_POST['fnama']))
{
	$fnama = $_POST['fnama'];
	$lalamat = $_POST['lalamat'];
	$nope = $_POST['nope'];
	$lahir = $_POST['lahir'];
	$date=date("Y-m-d",strtotime($lahir));
	echo "Nama : ".$fnama. "<br> Alamat : ".$lalamat."<br> No Hp : ".$nope."<br> Tanggal Lahir : ".$lahir."<br><br>";
	 if(!empty($fnama) && !empty($lalamat) && !empty($nope) && !empty($lahir)){
        $sql = "INSERT INTO prak5 (nama,alamat,nope,lahir) VALUES('$fnama','$lalamat','$nope','$lahir')";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
         if($query){
            echo "<b>Data berhasil di insert!</b>";
        } else {
            echo "Error :".$sql."<br>".mysqli_error($koneksi);
        }
    }

    mysqli_close($koneksi);
}
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
	$fnama = $_GET['fnama'];
	$lalamat = $_GET['lalamat'];
	$nope = $_GET['nope'];
	$lahir = $_GET['lahir'];
	echo "Nama : ".$fnama. "<br> Alamat : ".$lalamat."<br> No Hp : ".$nope."<br> Tanggal Lahir : ".$lahir."<br><br>";
	 if(!empty($fnama) && !empty($lalamat) && !empty($nope) && !empty($lahir)){
        $sql = "INSERT INTO prak5 (nama,alamat,nope,lahir) VALUES('$fnama','$lalamat','$nope','$lahir')";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
         if($query){
            echo "<b>Data berhasil di insert!</b>";
        } else {
            echo "Error :".$sql."<br>".mysqli_error($koneksi);
        }
    }

    mysqli_close($koneksi);
}
?>