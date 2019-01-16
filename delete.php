<?php
	include ("connect.php");
	$id = $_GET ['id'] ;
	mysql_query("DELETE FROM tab_barang where id='$id'")or die (mysql_error());
	
	header("location: asd.php? pesan=hapus");
?>