<!DOCTYPE html>
<html>
<head>
	<title>PHP Dasar</title>
</head>
<body>
	<form method="POST" name="frmpost" action="">
		<table align="center" border="1" cellpadding="0" cellspacing="0">
			<tr align="center"><td><h2><b>Masukan Data</b></h2></td>
			<tr>
				<td>
				<table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
					<tr>
						<td>Nama</td>
						<td> : </td>
						<td><input type="text" name="nama[]" size="40" /></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td> : </td>
						<td><input type="text" name="tgl[]" size="40" /></td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td> : </td>
						<td><select name="jabat">
  							<option value="direktur">Direktur</option>
  							<option value="manajer">Manajer</option>
  							<option value="staff">Staff</option>	
  							<option value="ob">Office Boy</option>
						</select></td>
					</tr>
					<tr>
						<td colspan="4" align="center"><input type="submit" name="btnOk" value="Simpan"></td>
					</tr>
				</table>
				</td>
			</tr>
			</tr>
		</table>
	</form>
	<center>
		<table border="1" cellpadding="2" cellspacing="4">
			<?php
			$nama = $_POST['nama'];
			$tgl = $_POST['tgl'];
			$pk = $_POST['pk'];

			foreach ($nama as $key => $value) {
			?>
			<tr>
				<td align="center" colspan="2">
					<?php
					echo '<b>Hasil Data yang di INPUT</b><br>';?>
				</td>
			</tr>
			<tr>
				<td><?php echo 'Nama'?></td>
				<td><?php echo $nama[$key];?></td>
			</tr>
			<tr>
				<td><?php echo 'Umur';?></td>
				<td>
					<?php
					$tanggal = new DateTime('2001-12-28');
					$today = new DateTime('2021-5-5');
					$y = $today->diff($tanggal)->y;
					$m = $today->diff($tanggal)->m;
					$d = $today->diff($tanggal)->d;
					echo "". $y . " tahun " . $m . " bulan " . $d . " hari ";
					?>
				</td>
			</tr>
			<tr>
				<td><?php echo 'Gaji';?></td>
				<td>
					<?php
					$jabatan = $_POST["jabat"];

					if ($jabatan=="direktur"){
					$jabatanku="Direktur";}
					else if($jabatan=="manajer"){
					$jabatanku="Manajer";}
					else if($jabatan=="staff"){
					$jabatanku="Staff";}
					else
					{$jabatanku="Office Boy";}
					echo "";
					if ($jabatanku=="Direktur"){
					$gajifinal="10.000.000";}
					else if($jabatanku=="Manajer"){
					$gajifinal="4.000.000";}
					else if($jabatanku=="Staff"){
					$gajifinal="3.000.000";}
					else
					{$gajifinal="1.500.000";}
					echo " Rp. $gajifinal  ";
					?>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</center>
</html>