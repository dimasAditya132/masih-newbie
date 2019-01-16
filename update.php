<?php
	//koneksi ke database
	include("connect.php");
	$kode		= $_POST["kode"];
	$nama		= $_POST["nama"];
	$deskripsi	= $_POST["deskripsi"];
	$harga		= $_POST["harga"];
	$stok		= $_POST["stok"];
	$berat		= $_POST["berat"];
	
	if (trim($kode)=="") {
		echo "Kode barang masih kosong, isi dengan benar";
	}
	elseif (trim($nama)=="") {
		echo "Nama barang belum diisi, isi dengan benar";
	}
	elseif (trim($deskripsi)=="") {
		echo "Deskripsi barang belum diisi, isi dengan benar";
	}
	elseif (trim($harga)=="") {
		echo "Harga barang belum diisi, isi dengan benar";
	}
	elseif (trim($stok)=="") {
		echo "Stok barang belum diisi, isi dengan benar";
	}
	elseif (trim($berat)=="") {
		echo "Berat barang belum diisi, isi dengan benar";
	}
	else{
	$edit = ("update tab_barang set kode='$kode', nama='$nama', deskripsi='$deskripsi', stok='$stok', harga='$harga', berat='$berat' where kode='$kode'");
	$hasil= mysql_query($edit,$conn);
	header("location: asd.php");
	}
	# Perkisa, jika form kosong berikan pesan error
	
?>