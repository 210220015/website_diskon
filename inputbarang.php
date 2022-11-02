<! DOCTYPE html>
<html>
<html>
<title>icha></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$qty = $_POST['qty'];
$kategori_id = $_POST['kategori_id'];

$a=mysqli_query($koneksi,"insert into barang values('','$nama_barang','$kode_barang','$qty','$kategori_id')");
if ($a)
{
header("location:tampilbarang.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querykategori = "SELECT * FROM kategori";
$resultkategori = mysqli_query($koneksi,$querykategori);

?>
<body>
<h2>icha<h/2>
<br/>
<a href="tampilbarang.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA Barang</h3>
<form method="POST">
	<table>
	<tr>
	<td>nama barang</td>
	<td><input type="text" Name="nama_barang"></td>
	</tr>
	<tr>
	<td>kode barang</td>
	<td><input type="text" Name="kode_barang"></td>
	</tr>
	<tr>
	<td>qty</td>
	<td><input type="number" Name="qty"></td>
	</tr>
	<tr>
	<td>kategori</td>
	<td><select name="kategori_id">
	<option value="">-----Pilih</option>
	<?php
	while ($datakategori=mysqli_fetch_array($resultkategori))
	{
		echo "<option value=$datakategori[id_kategori]>$datakategori[nama_kategori]</option>";
	}
	?>
	</select>
	<td>
	<tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>