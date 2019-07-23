<h1>INPUT HERO BARU</h1>
<hr>
<form action='simpan.php' method='post'>
Nama Hero : <input type='text' name='nama'> <br>
Tipe Hero : 
<?php
 $koneksi = new mysqli("localhost", "root", "", "ml");
 $qry = "SELECT * FROM tipe";
 $hasil = $koneksi->query($qry);
 ?>
<select name="tipe">
 <?php
	while($row = $hasil->fetch_array(MYSQLI_ASSOC)){
	?>
  <option value="<?php echo $row['id_tipe'];?>">
  <?php
	echo $row['nama_tipe'];
  ?>
  </option>
  <?php
	}
	?>
</select>



 <br>
Jenis Kelamin : <input type='text' name='jenkel'> <br>
<input type="submit" value='simpan'>
</form>
