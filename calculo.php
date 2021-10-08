<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Propinas</title>
    </head>
    <body>
            <form action="calculo.php" method="post">
            <p>Total de la cuenta: <br><br><input type="number" name="cuenta" /></p>
            <br>
            <p>Que tal el servicio?: <br><br>
                <select name="servicio" id="servicio">
                        <option value="30">Excelente 30%</option>
                        <option value="20">Bueno 20%</option>
                        <option value="10">Normal 10%</option>
                        <option value="1">Pesimo 1%</option>
                    </select>
            </p>
            <br>
            <p>Cuantas personas son?: <br><br><input type="number" name="personas" /></p>
            <br>
            <p><input type="submit" value="Aceptar" /></p>
            </form>

        <?php

            $cuenta=$_POST['cuenta'];
            $servicio=$_POST['servicio'];
            $personas=$_POST['personas'];

            $servicio1=$servicio*0.01;
            $porpersona=$cuenta/$personas;
            $total=$porpersona*$servicio1;

            echo "TOTAL A PAGAR:"; 
            echo '<br>';
            echo '<br>';
            echo " $total por persona";
            echo '<br>';
            echo '<br>';
            echo '';

        ?>


    </body>
</html>