<?php
	$nama = $_REQUEST['nama'];
	$tipe = $_REQUEST['tipe'];
	$jenkel = $_REQUEST['jenkel'];
	
	$koneksi = new mysqli("localhost", "root", "", "ml");
	$qry = "INSERT INTO hero(`nama_hero`, `tipe`, `jenkel`) VALUES('$nama', '$tipe', '$jenkel')";
	$hasil = $koneksi->query($qry);
	if ($hasil){
		echo "Data hero baru berhasil disimpan";
	}
?>
<br>
<a href='input.php' title='Input Hero Baru'><strong>TAMBAH HERO BARU</strong></a> | 
<a href='index.php' title='Daftar Nama Hero'><strong>DAFTAR HERO</strong></a>
