<?php
include("connect.php");
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$deskripsi = $_POST["deskripsi"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$berat = $_POST["berat"];


$input="insert into tab_barang (kode,nama,deskripsi,stok,harga,berat)
		values ('$kode','$nama','$deskripsi','$stok','$harga','$berat')";
$hasil = mysql_query($input,$conn);
header("location: asd.php");

?>
