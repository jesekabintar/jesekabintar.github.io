<?php 
$conn = mysqli_connect("localhost", "root", "", "biodata");
$result = mysqli_query($conn, "SELECT * FROM biodata");

$biodata = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Biodata</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(huh.png);">

	<div class="container">
		<div class="header">
			<h1 class="judul">My Biodata</h1>
		</div>
		<div class="content cf">
			<div class="main">
				<h3 style="margin-top: 10px;">Biodata Saya</h3>
				<p class="penulis" style="margin-bottom: 10px;">Ditulis oleh <a href="#">Jeseka Bintar</a>. pada 23 April 2022</p>
				<?php foreach ($result as $rst) : ?>
				<p>NIM : <?php echo $rst["NIM"]; ?></p>
				<hr>
				<p>Nama : <?php echo $rst["Nama"]; ?></p>
				<hr>
				<p>Fakultas : <?php echo $rst["Fakultas"]; ?></p>
				<hr>
				<p>Jurusan : <?php echo $rst["Jurusan"]; ?></p>
				<hr>
				<p>Jenis Kelamin : <?php echo $rst["Jenis Kelamin"]; ?></p>
				<hr>
				<p>Agama : <?php echo $rst["Agama"]; ?></p>
				<hr>
				<p>Tempat Lahir : <?php echo $rst["Tempat Lahir"]; ?></p>
				<hr>
				<p>Alamat : <?php echo $rst["Alamat"]; ?></p>
				<hr>
				<p>Provinsi : <?php echo $rst["Provinsi"]; ?></p>
				<hr>
				<p>Kota : <?php echo $rst["Kota"]; ?></p>
				<hr>
				<p>Kewarganegaraan : <?php echo $rst["Kewarganegaraan"]; ?></p>
				<hr>
				<p>Email : <?php echo $rst["Email"]; ?></p>
				<hr>
				<?php endforeach; ?>
			</div>
			<div class="sidebar">
				<h3>Tentang Penulis</h3>
				<img src="1.jpg" style="width: 100px; height: 150px;">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</body>
</html>