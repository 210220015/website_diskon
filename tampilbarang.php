    </html>
	<head>
	<title>icha</title>
	</head>
	<body>
	<h2>icha</h2>
	<br/>
	<a href="inputbarang.php">+ TAMBAH BARANG</a>
	<br/>
	<table border="1">
	<tr>
		<th>No</>
		<th>nama barang</th>
		<th>kode barang</th>
		<th>qty</th>
		<th>kategori</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from barang");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_barang']; ?></td>
			<td><?php echo $d['kode_barang']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['kategori_id']; ?></td>
			<td>
				<a href="edit_user.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="edit_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>