<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações matemáticas</title>
</head>
<body>
    <?php
        // Realizando operações através de valore informados na url.
        if(isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['y'])){
            
            //Adição
            if($_GET['operacao']=="adicao"){
                echo "O resultado é: ";    
                echo  $_GET['x'] + $_GET['y'];
            }

            //Subtração
            else if($_GET['operacao']=="subtracao"){
                echo "O resultado é: ";  
                echo $_GET['x'] - $_GET['y'];
            }

            //Multiplicação
            else if($_GET['operacao']=="multiplicacao"){
                echo "O resultado é: ";  
                echo $_GET['x'] * $_GET['y'];
            }

            //Divisão
            else if($_GET['operacao']=="divisao"){
                echo "O resultado é: ";  
                echo $_GET['x'] / $_GET['y'];
            }
        }
    ?>
</body>
</html>
