<!DOCTYPE html>
<html>
<head>
	<title>Halaman Web Dengan PHP</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">SEKOLAH MENENGAH ATAS (SMA) NEGERI 1 PASAMAN</h1>
		<h3 class="deskripsi">Selamat Datang Di SMA Negeri 1 Pasaman</h3>
	</header>
	<div class="menu">
		<ul>
			<li><a href="index.php?page=Beranda">BERANDA</a></li>
			<li><a href="index.php?page=Pendaftaran">PENDAFTARAN</a></li>
			<li><a href="index.php?page=Guru">GURU</a></li>
		</ul>
	</div>
	<div class="badan">
		<?php
		if(isset($_GET['page'])){
			$page = $_GET['page'];

			switch ($page) {
				case 'Beranda':
					include "isi/Beranda.php";
					break;
				case 'Pendaftaran':
					include "isi/Pendaftaran.php";
					break;
				case 'Guru':
					include "isi/Guru.php";
					break;	
				default:
					echo "<center><h3>Maaf. Halaman tidak ditemukan! </h3></center>";
					break;
			}
			}else{
				include "isi/Beranda.php";
			}

			?>

	</div>
</div>
<div class="footer">
	<footer>
		<center><p>Copyright|ICT|2023 <script>document.write(new Date().getFullYear());</script><a href="https://upiyptk.ac.id">Sekolah Menengah Atas (SMA) Negeri 1 Pasaman</a></p></center>
	</footer>
</div>
</body>
</html>