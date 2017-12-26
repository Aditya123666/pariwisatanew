<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
	<link href="css/docs.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>
	<script src="js/docs.js"></script>
    
    <style>
	</style>
	
<title>Selamat Datang di Website Kami</title>

</head>

<body class="metro">
	<header class="bg-darkCobalt" data-load="atasan.php"></header>
    
    <div class="" data-load="slider.php"></div>
	<br />
    <div class="container grid">
		<div class="border padding15">
        <div class="row">
			<div class="span7">
				<legend>Galeri Rumah Hobbit Lembang</legend>
				<div class="carousel" id="imgSlide">
					<div class="slide">
						<img src="images/galeri/rh1.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/rh2.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/rh3.jpg" class="cover1"/>
					</div>
					<div class="slide">
						<img src="images/galeri/rh4.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/rh5.jpg" class="cover1" />
					</div>
				</div>
			</div>
			<div class="span7">
				<legend>Galeri Alun-Alun Bandung</legend>
				<div class="carousel" id="imgSlide1">
					<div class="slide">
						<img src="images/galeri/alun1.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/alun2.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/alun3.jpeg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/alun4.jpg" class="cover1" />
					</div>
				</div>
			</div>
        </div>
		</div>
		
		<div class="border padding15">
        <div class="row">
			<div class="span7">
				<legend>Galeri Pangalengan</legend>
				<div class="carousel" id="imgSlide2">
					<div class="slide">
						<img src="images/galeri/pang1.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/pang2.jpg" class="cover1"/>
					</div>
					<div class="slide">
						<img src="images/galeri/pang3.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/pang4.jpeg" class="cover1" />
					</div>
				</div>
			</div>
			<div class="span7">
				<legend>Galeri Manglayang</legend>
				<div class="carousel" id="imgSlide3">
					<div class="slide">
						<img src="images/galeri/mang1.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/mang2.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/mang3.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/mang4.jpg" class="cover1" />
					</div>
				</div>
			</div>
        </div>
		</div>
		
		<div class="border padding15">
        <div class="row">
			<div class="span7">
				<legend>Galeri Taman-taman</legend>
				<div class="carousel" id="imgSlide4">
					<div class="slide">
						<img src="images/galeri/taman1.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/taman2.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/taman3.jpg" class="cover1" />
					</div>
					<div class="slide">
						<img src="images/galeri/taman4.jpg" class="cover1" />
					</div>
				</div>
			</div>
        </div>
		</div>
	</div>
    <footer class="dark" data-load="bawahan.html"></footer>
	
	<script>
		$(function(){
			$("#imgSlide").carousel({
				effect: 'slide',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide1").carousel({
				effect: 'fade',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide2").carousel({
				effect: 'slowdown',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide3").carousel({
				effect: 'switch',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
			$("#imgSlide4").carousel({
				effect: 'switch',
				period: 3000,
				markers: {
					show: true,
					type: 'default',
					position: 'bottom-right'
				}
			});
		})
	</script>
</body>
</html>
