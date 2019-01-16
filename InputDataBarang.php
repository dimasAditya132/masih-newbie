<html>
	<head>
		<title>Input Data Barang</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	<body>
		<form action="inputPelanggan.php" method="post">
		<h3><div class="judul">KELOLA DATA BARANG</div></h3>
		
		<br>
		
		<br>
		
		<table width="50%" height="5" align="center">
		<tr>
		<td><b>Input Data Barang</b></td>
		</tr>
		</table>
		
		<br>
	<div class="tengah">
		<table width="50%" height="5%" align="center">
		
		<tr>
		<td>Kode</td>
		<td>:</td>
		<td><input type="text" name="kode"></td>
		</tr>
		
		<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
		</tr>
		
		<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td><textarea name="deskripsi"></textarea></td>
		</tr>
		
		<tr>
		<td>Stok</td>
		<td>:</td>
		<td><input type="text" name="stok"></td>
		</tr>
		
		<tr>
		<td>Harga</td>
		<td>:</td>
		<td><input type="text" name="harga"></td>
		</tr>
		
		<tr>
		<td>Berat</td>
		<td>:</td>
		<td><input type="text" name="berat">gram</td>
		</tr>
		</table>
	</div>
		<p align="Center"><input class="btn1" type="submit" value="Tambah"></p>
		</form>
	</body>

</html>