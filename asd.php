<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	<body>
		<h3><div class="judul">KELOLA DATA BARANG</div></h3>
		
		<br>
		<br>
		
		<table width="80%" height="5%" align="center">
		<tr>
			<td><b>Data Barang</b></td>
			<td><p align="right"><a href="InputDataBarang.php"><button class="btn1">Tambah</button></a></p></td>
		</tr>
		</table>
			<br>
		<table width="80%" height="10%" align="center" border="2" cellpadding="0" cellspacing="0">
		
		<tr align="center">
		
			<td width="10%">Kode 	</td>
			<td width="60%">Nama	</td>
			<td width="10%">Harga	</td>
			<td width="20%">Aksi	</td>
		
		</tr>
		
		<?php
		$db = "barangdb";
		$conn = mysql_connect("localhost","root","", $db);
		$yea = mysql_select_db($db,$conn);

		$q = "select * from tab_barang";
		$tampil = mysql_query ($q);
		while ($data = mysql_fetch_array($tampil)){
		?>
			<tr align="center">
			<td><?php echo $data['kode']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td class= "eh"><button class="btn"><a href = "edit.php?no=<?php echo $data['id'];?>">Edit</button> | <button class="btn"><a href="delete.php?id=<?php echo $data['id'];?>">Hapus</button></a></td>
		</tr>
		<?php
		}
		?>
		
	</body>
</html>