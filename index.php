<!DOCTYPE html>	
<html>
<head>
	<title>I Gusti Alit Putra Arthadi's Website</title>
	<link rel="stylesheet" type="text/css" href="style_ujian_web.css?<?=filemtime('style_ujian_web.css');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<nav class="nav_style">
			<div class="logo_mungkin" >
				<button class="nav-logo" onclick="navigasi_home()"> Alit Putra </button> 
			</div>
			<div class="navigation">
				<button class="nav_item" onclick="navigasi_aboutMe()">About Me</button>
				<button class="nav_item" onclick="navigasi_contactMe()">Contact Me</button>
				<button class="nav_item" onclick="navigasi_artworks()" >Artworks</button>
			</div>
	</nav>

	<nav class="nav_mobile">
		<center><div class="logo_mobile">
			<button class="nav-logo" onclick="navigasi_home()"> Alit Putra </button> 
		</div></center>

		<center>
			<div class="navigation_mobile">
				<button style="background-color: white;border: none; font-family: SourceSansPro-Regular;font-size: 3.5vw;" onclick="navigasi_aboutMe()">About Me</button>
				<button style="background-color: white;border: none; font-family: SourceSansPro-Regular;font-size: 3.5vw;" onclick="navigasi_contactMe()">Contact Me</button>
				<button style="background-color: white;border: none; font-family: SourceSansPro-Regular;font-size: 3.5vw;"  onclick="navigasi_artworks()" >Artworks</button>
			</div>
			</center>
	</nav>

	<header>
		<div class="header_gambar" id="home">
			<img src="bahan/header.jpg" class="gambar">
			<div class="atasnya_filter">
				<div class="containernya">
					<p class="header_judul">Alit Putra</p>
					<p class="header_tulisan">Minimalist & Landscape Photographer</p>
				</div>	
			</div>
		</div>
	</header>

	<main>
		<div class="content">

			<div class="batasan_artikel" >
				<div class="tengah_cara_bodoh"></div>
				<div class="tengah_isi">
					<p class="tulisan_batasan">MOTTO FOTOGRAFI</p>
				</div>
				<div class="tengah_cara_bodoh"></div>		
			</div>
			
			
			<article class="artikel_moto">
				<div class="isi_moto">
					<p class="tulisan_moto">"Minimalism is all about simplicity. Substracting the unnecessarry, and adding any the meaningfull and important. Minimalism is my powerfull" </p>
				</div>
			</article>



			<div class="batasan_artikel_artwork" id="artworksID">
				<div class="tengah_cara_bodoh"></div>
				<div class="tengah_isi">
					<p class="tulisan_batasan">ARTWORKS</p>
				</div>
				<div class="tengah_cara_bodoh"></div>		
			</div>

			<!-- GAMBAR ARTWORKS DIAMBIL DARI UNSPALSH.COM  -->
			<article class="artworks">
				<div class="artworks_container">
					<div class="artworks_box">
						<img src="bahan/1.png" class="gambar_artworks">
					</div>

					<div class="artworks_box_tengah">
						<img src="bahan/2.png" class="gambar_artworks">
					</div>

					<div class="artworks_box">
						<img src="bahan/3.png" class="gambar_artworks" style="margin-right: 0px">
					</div>
				</div>

				<div class="artworks_container">
					<div class="artworks_box">
						<img src="bahan/4.png" class="gambar_artworks">
					</div>

					<div class="artworks_box_tengah">
						<img src="bahan/5.png" class="gambar_artworks">
					</div>

					<div class="artworks_box">
						<img src="bahan/6.png" class="gambar_artworks" style="margin-right: 0px">
					</div>
				</div>

				<div class="artworks_container">
					<div class="artworks_box">
						<img src="bahan/7.png" class="gambar_artworks">
					</div>

					<div class="artworks_box_tengah">
						<img src="bahan/8.png" class="gambar_artworks">
					</div>

					<div class="artworks_box">
						<img src="bahan/9.png" class="gambar_artworks" >
					</div>
				</div>


				<div class="artworks_container">
					<div class="artworks_box">
						<img src="bahan/10.png" class="gambar_artworks">
					</div>

					<div class="artworks_box_tengah">
						<img src="bahan/11.png" class="gambar_artworks">
					</div>

					<div class="artworks_box">
						<img src="bahan/12.png" class="gambar_artworks" style=>
					</div>
				</div>
			</article>

			<div class="batasan_artikel_artwork" id="about_me">
				<div class="tengah_cara_bodoh"></div>
				<div class="tengah_isi">
					<p class="tulisan_batasan">ABOUT ME</p>
				</div>
				<div class="tengah_cara_bodoh"></div>		
			</div>

			<aside class="container_profil">
				
				<div class="enkapsulasi"> 
					<div class="gambar_profil">
						<img src="bahan/profil.jpg" class="foto_profil">
					</div>

					<div class="deskripsi_profil">
						<h1 class="judul_profil">Hello, </h1>
						<h2 class="subJudul_profil">A bit about me</h2>
						<p class="tulisan_profil">My name is I Gusti Alit Putra Arthadi. <br>
							I live in Perum Permata Nusa Dua Blok i No. 7. <br>
							This year, im 21 years old. <br>	
						</p>
					</div>
				</div>
				
			</aside>

			<div class="batasan_artikel_artwork" id="contact_me">
				<div class="tengah_cara_bodoh"></div>
				<div class="tengah_isi">
					<p class="tulisan_batasan">CONTACT ME</p>
				</div>
				<div class="tengah_cara_bodoh"></div>		
			</div>


			<!-- vector social media image dari flaticon.com -->
			<article class="hubungi_saya">
				<div class="isi_hubungi_saya">
					<a href="https://www.instagram.com/alitputraarthadi/" class="icon_link" style="margin-left: 1vw;" class="t"><img src="bahan/instagram2.png" class="icon"></a>

					<a href="https://web.facebook.com/alitputra.arthadi" style="margin-left: 2vw;" class="icon_link"><img src="bahan/facebook2.png" class="icon" ></a>

					<a href="https://wa.me/+6208970219813?text=Say%20hello%20to%20alit%20putra" style="margin-left: 2vw;" class="icon_link"><img src="bahan/whatsapp.png" class="icon"></a>

				</div>
			</article>
		</div>
	</main>


	<footer>
		<p class="footer">© Alit Putra 2021 </p>
	</footer>


	<script type="text/javascript">
		function navigasi_aboutMe() {
			var scroll = document.getElementById("about_me"); 
			scroll.scrollIntoView();
		} 

		function navigasi_contactMe() {
			var scroll = document.getElementById("contact_me"); 
			scroll.scrollIntoView();
		} 

		function navigasi_artworks() {
			var scroll = document.getElementById("artworksID"); 
			scroll.scrollIntoView();
		} 

		function navigasi_home() {
			var scroll = document.getElementById("home"); 
			scroll.scrollIntoView();
		} 

	</script>


	

</body>
</html>