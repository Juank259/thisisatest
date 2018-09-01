
<!DOCTYPE html>
<html>
<head>
	<title>Taller1</title>

	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

<header> <!-- Aqui se pone El titulo de la Pagina !-->
<h3>Pagina de Inicio  </h3>
</header>


<nav>
	<ul>
		<li><a href="somos.php">Inicio</a></li>
		<li><a href="registro.php">Registro</a></li>
		<li><a href="promo.php">Promociones</a></li>
		<li><a href="catalogo.php">Catalogo</a></li>


	</ul>
</nav>

<div class="mislide">
	<div class="slideshow-container">

				<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="images/car2.jpg" style="width:100%; height:510px;" >
				<div class="text"></div>
				</div>

				<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
					<a href="bmw.php">
				<img src="images/bmw.jpg" style="width:100%; height:520px;">
				<div class="text"></div>
				</div>

				<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<a href="porsche.php">
				<img src="images/porshe.jpg" style="width:100%; height:520px;">
				<div class="text"></div>
				</div>


				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
				<br>

			<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div>

				<script>
							var slideIndex = 1;
							showSlides(slideIndex);

							function plusSlides(n) {
							showSlides(slideIndex += n);
							}

							function currentSlide(n) {
							showSlides(slideIndex = n);
							}

							function showSlides(n) {
							var i;
							var slides = document.getElementsByClassName("mySlides");
							var dots = document.getElementsByClassName("dot");
							if (n > slides.length) {slideIndex = 1}
							if (n < 1) {slideIndex = slides.length}
							for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";
							}
							for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
							}
							slides[slideIndex-1].style.display = "block";
							dots[slideIndex-1].className += " active";
							}
				</script>

</div>

<div id="conten">


<section id="part1">

		  <article class="arti">

		  		<img src="images/cuad1.jpg">

		  		<section id="sumary">
		  		<br><strong>VENTAS CORPORATIVAS ESPECIALES</strong></br>
 				</p>
		  		</section>

		  </article>

			<article class="arti">

					<img src="images/cuad2.jpg">

					<section id="sumary">
					<br><strong>Tienda Online</strong></br>
					</section>

			</article>

			<article class="arti">

					<img src="images/cuad3.png">

					<section id="sumary">
					<br><strong>Siempre Eficiente</strong></br>

					</section>

			</article>

			<article class="arti">

					<img src="images/cuad4.png">

					<section id="sumary">
					<br><strong>Una Red Interconectada</strong></br>

					</section>

			</article>

</section>





</div>


<footer class="separa">

	<p>Derechos Reservados<br />
		Juan Castro 8-920-78<br />
		John Kent 8-907-2358 <br />
		Moisés Chin 8-922-248
	</p>

		</footer>



</body>
</html>
