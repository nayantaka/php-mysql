<?php
 $koneksi = new mysqli("localhost", "root", "", "ml");
 $qry = "SELECT * FROM hero";
 $hasil = $koneksi->query($qry);
 ?>
 <table border=1 cellpadding=5 cellspacing=0>
 <tr>
	<td><strong>ID Hero</strong></td>
	<td>Nama Hero</td>
	<td>Tipe Hero</td>
	<td>Jenis Kelamin</td>
 </tr>
 <?php
 while($row = $hasil->fetch_array(MYSQLI_ASSOC)){
	echo '<tr><td>';
	echo $row['id'];
	echo '</td><td>';
	echo $row['nama_hero'];
	echo '</td><td>';
	echo $row['tipe'];
	echo '</td><td>';
	echo $row['jenkel'];
	echo '</td></tr>';
	
 }
?>
</table>