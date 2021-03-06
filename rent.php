<!DOCTYPE html>
<html>
<head>
	<title>Трилобит - Городская среда</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		.footer {
			padding-top: 25px;
			height: 80px;
			background-color: #2A363B;
			color: #FBFEF9;
		}
		body{
			font-family: 'Montserrat', Arial;
			background-color: #2A363B;
			color: #fff;
		}
		.header {
			height: 620px;
			background-image: url(img/rent.png);
		}
		.header h1 {
			margin-top: 250px;
			color: #22181C;
			font-weight: bold;
		}
		.rentThing {
			color: #22181C;
			padding-top: 650px;
			height: 1300px;
		}
		a {
			color: #22181C;
			text-decoration: none;
			transition-duration: 0.3s;
		}
		a:hover {
			color: #4A3D42;
		}
	</style>
</head>
<body>
	<div class="header">
		<?php include('header.php')?>

		<div class="container-fluid">
			<div class="row">
				<h1 class="text-center">АРЕНДА</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid mt-5">
		<div class="row">
			<h1 class="text-left">Виды аренды</h1>
		</div>
		<div class="row rentThing text-end" style="z-index: 90; background-image: url(img/rentThing.png);">
			<h1 class="fw-bolder"><a href="rentP.php">Аренда помещения</a></h1>
		</div>
		<div class="row rentThing text-end" style="z-index: 89; margin-top: -680px; background-image: url(img/rentThing.png);">
			<h1 class="fw-bolder"><a href="rentP.php">Аренда площадки</a></h1>
		</div>
		<div class="row rentThing text-end" style="z-index: 88; margin-top: -680px; background-image: url(img/rentThing2.png);">
			<h1 class="fw-bolder"><a href="rentP.php">Аренда сцены</a></h1>
		</div>	
	</div>

	<?php include('footer.php')?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>