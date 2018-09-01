
<?php

    function gen_Interest(){
        $interest = array('Deportes', 'Musica', 'VideoJuegos', 'Programacion', 'Viajes', 'Autos');

        foreach($interest as $i){
            echo '  <input type="checkbox" name="interest[]" value="'.$i.'">'. $i .'<br>';
        }
    }

?>