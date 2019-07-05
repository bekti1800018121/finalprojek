<html>
<head>
	<title>FINAL Project Pemrograman Web</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="java.js"></script>
</head>
<!--bagian header template -->
	<header>
		<h1 class="judul">UNIVERSITAS AHMAD DAHLAN</h1>
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!--bagian menu-->
		<nav class="menu">
			<ul>
				<li>
					<a href="13.html">Home</a>
				</li>
				<li>
					<a href="12.html"">Identitas</a>
				</li>
				<li>
					<a href="11.html">Galeri</a>
				</li>
				<li>
					<a href="10.html">Kontak</a>
				</li>
				
			</ul>
		</nav>
		<!-- akhir bagian menu -->
		
		<!-- menampilkan jam secara (Aktif)-->
		<div align="center" id="clock">
			
		</div>
		<!--akhir menampilkan jam secara (aktif)-->
		
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>media sosial</h2>
				<p>Klik tautan di bawah ini 
					<a target="_blank" href="https://www.youtube.com">www.youtube.com</a>
					<a target="_blank" href="https://web.facebook.com">www.facebook.com</a>
					<a target="_blank" href="https://web.instagram.com">www.instagram.com</a>
				</p>
			</div>
		</aside>
<?php
$fp = fopen("bukupengunjung.txt","a+");
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$komen = $_POST['komen'];

fputs($fp,"$nama|$alamat|$jk|$komen\n");
fclose($fp);
echo "<a href=data.php> Lihat Pengunjung </a><br>";
echo "<a href=12.html> Isi Buku Pengunjung </a><br>";
echo "<a href=11.html> Lihat Profile </a><br> ";
echo "<center>Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu</center><br><br>";
?>
</div>
</body>
</html>