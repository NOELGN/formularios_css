<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcular Venta</title>
</head>
<body>
    <?php
    $precioCompra = $_POST["txtPrecioCompra"];
    $origen = $_POST["rbOrigen"];
    $marca = $_POST["cmdMarca"];
    //echo "$precioCompra $origen $marca";
    $impuesto = 0.0;
    $total;
    switch($origen){
        case "alemania":
            $impuesto = $precioCompra * 0.25;
            break;
        case "japon":
            $impuesto = $precioCompra * 0.30;
            break;
        case "usa":
            $impuesto = $precioCompra * 0.15;
            break;
        case "italia":
            $impuesto = $precioCompra * 0.20;
            break;
    }
    $total = $precioCompra + $impuesto; 

    ?>
    <header>
    <h1>Factura</h1>
    </header>
    <main>
        <section>
        <?php
            if($marca == "selecione "){
                echo "No Ingreso Marca";
            }else{
                echo "<p> Precio Compra: $precioCompra <br>
                  Origen: $origen <br>
                  Marca: $marca <br>
                  Total de compra: $total <p>";
            }      
        ?>   
        </section>
    </main>
</body>
</html>