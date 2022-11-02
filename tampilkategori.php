</html>
	<head>
	<title>icha</title>
	</head>
	<body>
	<h2>icha</h2>
	<br/>
	<a href="inputkategori.php">+ TAMBAH KATEGORI</a>
	<br/>
	<table border="1">
	<tr>
	<th>No</th>
		<th>Nama Kategori</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from kategori");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_kategori']; ?></td>
			<td>
				<a href="edit_tampilkategori.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="edit_tampilkategori.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>