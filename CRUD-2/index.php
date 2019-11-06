<?php

include('koneksi.php');

?>
<div class="container">
	<h1>DAFTAR SISWA SMKN 1 SUBANG</h1>
		<a href="siswa_tambah.php" class="btn btn-primary">TAMBAH DATA</a>
		<br><br>
		<table id="table_data" class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>NO</th>
				<th>NIS</th>
				<th>NAMA</th>
				<th>JK</th>
				<th>TEMPAT LAHIR</th>
				<th>TANGGAL LAHIR</th>
				<th>ALAMAT</th>
				<th>NO HP</th>
				<th>TANGGAL ENTRI</th>
				<th width="100px">AKSI</th>
			</tr>
		</thead>
	<tbody>
</div>
	<?php
		$sql = " SELECT * FROM siswa ORDER BY tanggal_entri DESC;"; //Query SQL
		$result = $db->query($sql); // Execute Query SQL
		$no = 1;
		while ($row = $result->fetch_assoc()) { //Menampilkan bentuk array
			echo "
			<tr>
				<td>". $no++."</td>
				<td>". $row["nis"] ."</td>
				<td>". $row["nama_lengkap"] ."</td>
				<td><center>". $row["jk"] ."</center></td>
				<td>". $row["tmp_lahir"] ."</td>
				<td>". $row["tgl_lahir"] ."</td>
				<td>". $row["alamat"] ."</td>
				<td>". $row["no_hp"] ."</td>
				<td>". $row["tanggal_entri"] ."</td>
				<td><center>
					<a href='siswa_edit.php?id=".$row["id_siswa"]."' class='btn btn-success btn-sm'>EDIT</a><br> 
					<a href='siswa_hapus.php?id=".$row["id_siswa"]."' class='btn btn-danger btn-sm'
					onclick='return confirm(\"YAKIN DIHAPUS ?\");'>DELETE</a>	
				</td><center>
			</tr>
			
			";
		} 
		
	?>
	</tbody>
</table>
			<footer>
				<br>
				<center>Copyright &copy; 2019 R.A.M All rights reserved.</center>
			</footer>