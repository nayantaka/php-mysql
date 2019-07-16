<?php
 $koneksi = new mysqli("localhost", "root", "", "ml");
 $qry = "SELECT * FROM tipe";
 $hasil = $koneksi->query($qry);
 ?>
 <table border=1 cellpadding=5 cellspacing=0>
 <tr>
	<td><strong>ID Tipe</strong></td>
	<td>Nama Tipe</td>
	<td>Action</td>
 </tr>
 
 <?php
 while($row = $hasil->fetch_array(MYSQLI_ASSOC)){
	echo '<tr><td>';
	echo $row['id_tipe'];
	echo '</td><td>';
	echo $row['nama_tipe'];
	echo '</td><td>';
	echo "<a href=edit.php?id=$row[id_tipe]>Edit </a>| <a href=hapus.php?id=$row[id_tipe]>Hapus</a>";
	echo '</td></tr>';
	
 }
?>

</table>
<br>
<a href='input_tipe.php' title='Input Tipe Hero Baru'><strong>TAMBAH TIPE HERO BARU</strong></a>
