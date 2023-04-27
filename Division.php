<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Division</h1>
    <div>
        <form action="" method="post">
            <p>Ingresa el primer Valor</p>
            <input type="number" name="numero1" id="numero1" placeholder="Ingrese el primer valor">
            <p>Ingresa el segundo Valor</p>
            <input type="number" name="numero2" id="numero2" placeholder="Ingrese el segundo valor">
        <button type="submit">Calcular</button>
    </form>
    <?php
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $resultado = $num1 / $num2;
        echo "El resultado de la Division es " . $resultado;
    ?>
    </div>
</body>
</html>