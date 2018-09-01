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


<?php


function zodiac($day, $month) {
    $zodiac = array('', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn');
    $last_day = array('', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19);
    return ($day > $last_day[$month]) ? $zodiac[$month + 1] : $zodiac[$month];
}

function age($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}

$spanish =  array("Nombre:","Apellido:","Email:","Telefono :","Fecha de nacimiento","Direccion:","Ciudad:","Intereses","Pais:","Cedula:");


list($year, $month, $day) = explode("-", $_POST["bday"]);
$month = intval($month);

echo gettype($_POST["interest"]);

$i = 0;
if(isset($_POST["bday"]))
{
    echo '<ul class="contact_form">';
    foreach($_POST as $nomb_camp => $val){

        if($i == sizeof($spanish)){
            break;
        }

        echo "<li>". $spanish[$i] . "<br>";
        $i++;

        if ($nomb_camp == "bday"){
            echo $day. " / ". $month . " / ". $year;
            echo "<br>Signo Zodiacal: ". zodiac($day, $month). "<br>Edad: ";
            echo age($_POST["bday"]);
        }
        else if(gettype($val) == "array"){
            foreach($val as $ele){
                echo $ele."</li><br>";
            }
        }
        else{
            echo $val;
            echo "</li>";
        } 
    }
    echo "</ul>";
}

else{
    echo "ERROR DE ENVIO - RETROCEDA PORFAVOR";
}


?>

<!-- Hasta aqui se puede meter contenido -->
<br>
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
