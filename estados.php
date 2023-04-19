<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<body>

    <?php

        $estado = $_GET["estado"];
            switch ($estado){
                case 1: 
                        echo "<p>Você mora na região Norte <br>";
                        echo '<img src="https://s3.static.brasilescola.uol.com.br/be/2020/05/mapa-da-regiao-norte.jpg">';
                        break;
                        case 2: 
                            echo "Você mora na região Nordeste <br>";
                            echo '<img src="https://s3.static.brasilescola.uol.com.br/be/2020/05/mapa-da-regiao-nordeste.jpg">';
                            break;
                             case 3: 
                                    echo "Você mora na região Centro-Oeste <br>";
                                    echo '<img src="https://s1.static.brasilescola.uol.com.br/be/2020/05/mapa-da-regiao-centro-oeste.jpg">';
                                    break;
                                    case 4: 
                                        echo "Você mora na região Sudeste <br>";
                                        echo '<img src="https://s4.static.brasilescola.uol.com.br/be/2020/05/mapa-da-regiao-sudeste.jpg">';
                                        break;
                                            case 5: 
                                                echo "Você mora na região Sul <br>";
                                                echo '<img src="https://s4.static.brasilescola.uol.com.br/be/2020/05/mapa-regiao-sul.jpg">';

                    
            }

            ?>
    
</body>
</html>