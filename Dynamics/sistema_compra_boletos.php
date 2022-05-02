<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos</title>
</head>
<body>

    <?php
        $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "no especifico"; 
        $apellidos = (isset($_POST['apellidos']) && $_POST["apellidos"] != "")? $_POST['apellidos'] : "no especifico";
        $edad = (isset($_POST['edad']) && $_POST["edad"] != "")? $_POST['edad'] : "no especifico";
        $direccion = (isset($_POST['direccion']) && $_POST["direccion"] != "")? $_POST['direccion'] : "no especifico";
        $NumeroBoletos = (isset($_POST['boletos']) && $_POST["boletos"] != "")? $_POST['boletos'] : "no especifico";
        $TipoBoleto = (isset($_POST['tipo']) && $_POST["tipo"] != "")? $_POST['tipo'] : "no especifico";

        $i; 
        $Frase;

    for($i=1; $i<=$NumeroBoletos; $i++){
            echo '<table border="1" cellpadding="40px" align="center">
             <thead>
                <th colspan="5">SIX FLAGS</th>
            </thead>
    
            <tbody>
                <tr> 
                    <td>'.$nombre.'</td>
                    <td>'.$apellidos.'</td>
                    <td>'.$edad.'</td>
                    <td rowspan="3">';if($TipoBoleto == "Común"){
                            echo '<img src="./Afortunado1.png" width="200px" alt="Afortunado1">'; 
                         }
                         else if($TipoBoleto == "Flash pass"){
                            echo '<img src="./Afortunado2.png" width="200px" alt="Afortunado2">'; 
                         }
                         else if($TipoBoleto == "Adventure pass"){
                            echo '<img src="./Afortunado3.png" width="200px" alt="Afortunado3">'; 
                        }
                        else if($TipoBoleto == "Extreme pass"){
                             echo '<img src="./Afortunado4.png" width="200px" alt="Afortunado4">'; 
                        }
                        else if($TipoBoleto == "Ultimate pass"){
                             echo '<img src="./Afortunado5.png" width="200px" alt="Afortunado5">'; 
                        } 
                    echo'</td> 
                </tr>
    
                <tr>
                    <td>'.$direccion.'</td>
                    <td>'.$NumeroBoletos.'</td>
                    <td>'.$TipoBoleto.'</td>
    
                </tr>
                <tr>';
                   
                echo '<td colspan="3">    
                   ';if($TipoBoleto == "Común"){
                        echo "Normalito, normalito";
                     }
                    else if($TipoBoleto == "Flash pass"){
                        echo "Rapidín";                  
                    }
                    else if($TipoBoleto == "Adventure pass"){
                        echo "Disfrute su aventura"; 
                    }
                    else if($TipoBoleto == "Extreme pass"){
                        echo "Bien ahí"; 
                    }
                    else if($TipoBoleto == "Ultimate pass"){
                        echo "*Suenan cánticos angelicales*";
                    }; 
                echo '</td> 
                </tr>
            </tbody>
        </table>';}
            

         
?> 

</body>
</html>
