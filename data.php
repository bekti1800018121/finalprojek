<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="java.js"></script>
</head>
</body>
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
				<li>
					<a href="data.php">Daftar</a>
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
		<!-- akhir bagian sidebar website -->

<?php
echo "<head><title>FINAL Project Pemrograman Web</title></head>";
$fp = fopen("bukupengunjung.txt","r");
echo "<div>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi);
echo "Nama : $pisah[0]<br>";
echo "Alamat $pisah[1]<br>";
echo "Jenis Kelamin: $pisah[2]<br>";
echo "Komentar: $pisah[3]
&nbsp;<hr>&nbsp;<hr><br>";
}
echo "</div>";
echo "<br><br><a href=12.html>isi Buku pengunjung</a>";
echo "<br>";
echo "<a href=9.html> Profile </a>";
?>
		<div class="footer">
			<font color="orange"> copyright &copy; 2019 Jati Bekti Nugroho</font>
		</div>

</html>