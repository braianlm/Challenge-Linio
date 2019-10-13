<!-- # Challenge - Desarrollador Junior Backend

Escriba un programa que imprima todos los números del 1 al 100. 
Sin embargo, para múltiplos de 3, en lugar del número, escriba "Linio".
Para múltiplos de 5 imprimir "ESO".
Para números que son múltiplos de 3 y 5, imprima "Linianos".

# Requisitos
* Pruebas unitarias
* Puedes escribir el desafío en el idioma que quieras. Aquí en Linio estamos
grandes fanáticos de PHP, Kotlin y TypeScript

# Sumisión
Cree un repositorio en GitLab, GitHub o cualquier otro servicio similar y
solo envíenos el enlace.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge</title>
</head>
<body>
    <h4>

    <?php       

    for ($i=1; $i <= 100 ; $i++) { 
        switch ($i) {

            case ($i % 3 == 0 && $i % 5 == 0 ):
                echo "Linianos <br>";
                break;

            case ($i % 3 == 0):
                echo "Linio <br>";
                break;

            case ($i % 5 == 0):
                echo "ESO <br>";
                break;

            default:
                echo "$i <br>";
                break;
        }
    }
        
        

    ?>

    </h4>
</body>
</html>