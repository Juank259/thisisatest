<!DOCTYPE html>
<html>
<head>
	<title>Taller1</title>

	<link rel="stylesheet" type="text/css" href="css/registro.css">

</head>
<body>

<header> <!-- Aqui se pone El titulo de la Pagina !-->
<h3>Catalogo  </h3>
</header>


<nav>
	<ul>
		<li><a href="somos.php">Inicio</a></li>
		<li><a href="registro.php">Registro</a></li>
		<li><a href="promo.php">Promociones</a></li>
		<li><a href="catalogo.php">Catalogo</a></li>
	</ul>
</nav>



<div id="conten">

<!-- Desde aqui se puede meter contenido -->

<div id="prob1">
    <form action="script.php" method="post" name="formu" class="contact_form">
				<ul>
					<li>
						<h2 id="acti">Registro de Informacion</h2>
						<span class="required_notification"> * Campos obligatorios</span>
						<br />
					</li>

					<li><label for="nom">Nombre:</label>
							<input  type="text"  name="Nombre" placeholder="pepe " id="cajced" required/><br />
					</li>

                    <li><label for="nom">Apellido:</label>
                        <input  type="text"  name="Apellido" placeholder="martinez " id="cajced" required/><br />
                    </li>

					<li><label for="email">Email:</label>
							<input type="email"  name="Email" placeholder="pepe@ingweb.com.pa" id="cajced" pattern=".+@ingweb.com.pa" required/><span class="form_hint">	Formato correcto " pepe@ingweb.com.pa"</span>
							<br />
					</li>

					<li><label for="url">Telefono:</label>
							<input type="tel"  name="Telefono" placeholder="589663"  id="cajced" required />
							<span class="form_hint">		Formato correcto "6664-4842"</span><br />
                    </li>
                    
                    <li><label for="nom">Fecha de Nacimiento:</label>
							<input  type="date"  name="bday" id="cajced" required/><br />
					</li>

                    <li><label for="nom">Direccion:</label>
                        <input  type="text"  name="direccion" placeholder="Av. Voloshinov 5896 " id="cajced" /><br />
                    </li>

                    <li><label for="nom">Ciudad:</label>
                        <input  type="text"  name="Ciudad" placeholder="Puerto Bondad " id="cajced" /><br />
                    </li>

                    <li><label for="nom">Intereses: </label>
                        <?php require("functions.php");
                            gen_Interest();
                         ?>
                    </li>

                    <li><label for="nom">Pais:</label>
                        <input  type="text"  name="pais" placeholder="Aguirre " id="cajced" /><br />
                    </li>
                        
                        <li><label for="nom">Cedula:</label>
                            <input  type="text"  name="cedu" placeholder="XX-XXXXX-XXXXXX" id="cajced" /><br />
                        </li>

						<li>
							<button type="submit" formaction="script.php" formmethod="post" value="1" name="enviado" class="submit" id="envio" >Enviar:</button>
				</ul>

	        </form>
          </div>
    

<!-- Hasta aqui se puede meter contenido -->

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
