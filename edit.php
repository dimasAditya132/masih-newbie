<html>
	<head>
		<title>Input Data Barang</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	<body>
	<?php
		include ("connect.php");
		$no = $_GET['no'];
		$query_mysql= mysql_query("Select * from tab_barang where id = '$no'")or die (mysql_error());
		while($data= mysql_fetch_array($query_mysql)){
	?>
		<form action="update.php" method="post">
		<h3><div class="judul">KELOLA DATA BARANG</div></h3>
	
		<br>
		
		<br>
		
		<table width="50%" height="5%" align="center">
		<tr>
		<td><b>Input Data Barang</b></td>
		</tr>
		</table>
		
		<br>
		
		<table width="50%" height="5%" align="center">
		
		<tr>
		<td>Kode</td>
		<td>:</td>
		<td><input type="text" name="kode" readonly value="<?php echo $data['kode']?>"></td>
		</tr>
		
		<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama']?>"></td>
		</tr>
		
		<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td><textarea name="deskripsi"><?php echo $data['deskripsi']?> </textarea></td>
		</tr>
		
		<tr>
		<td>Stok</td>
		<td>:</td>
		<td><input type="text" name="stok" value="<?php echo $data['stok']?>"></td>
		</tr>
		
		<tr>
		<td>Harga</td>
		<td>:</td>
		<td><input type="text" name="harga" value="<?php echo $data['harga']?>"></td>
		</tr>
		
		<tr>
		<td>Berat</td>
		<td>:</td>
		<td><input type="text" name="berat" value="<?php echo $data['berat']?>">gram</td>
		</tr>
		<table>
		
		<p align="Center"><input class="btn" type="submit" value="EDIT"></p>
		</form>
		<?php
		}
		?>
	</body>
</html>