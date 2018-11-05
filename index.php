<?php 
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<link rel="stylesheet" href="tampilan.css" type="text/css">
</head>
<body><center>
<h1>Tabel Data Siswa</h1>
<table>
		<tr>
			<th>ID</th>
			<th>Nama Panjang</th>
			<th>Username</th>
			<th>Kata sandi</th>
			<th>Level</th>
		</tr>

			<?php 
				$qry = mysqli_query($connect,"SELECT * FROM user");
				while($user = mysqli_fetch_array($qry)){
			 ?>

		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['Nama_Panjang']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['kata_sandi']; ?></td>
			<td><?php echo $user['level']; ?></td>

		</tr>

		<?php  
		}
		?>
  </table>
  </center>
</body>
</html>
