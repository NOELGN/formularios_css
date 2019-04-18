<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documenthe</title>
    <link rel="Stylesheet" href="css/bootstrap.min.css">
    <link rel="Stylesheet" href="css/miestilo.css">
</head>
<body>
    <header class="jumbotron">
      <h1 class="display-2">Agencia Tesji</h1>
    </header>
    <main>
        <section id="espacio">

        </section>
        <section class="datos">
            <form method="post" action="agenciatesji.php">
            <div class="form-group">
                <label>precio compra</label>
                <input id="inputPrecio" class="form-control" type="text" name="txtPrecioCompra" placeholder="ingresa precio"> 
            </div>

            <div class="form-group">
                <label>Seleccione Origen</label>    
                <br>
                <input type="radio" name="rbOrigen" value="alemania" checked>Alemania
                <br>
                <input type="radio" name="rbOrigen" value="japon">Japon
                <br>
                <input type="radio" name="rbOrigen" value="usa">USA
                <br>
                <input type="radio" name="rbOrigen" value="italia">Italia
            </div>

            <div id="selectMarca" class="form-group">
                <label>Marca</label>
                <select class="form-control" name="cmdMarca" size="1">
                <option value="selecione ">..seleccione</option>
                <option value="mercedes">Mercedes Benz</option>
                <option value="audi">Audi</option>
                <option value="bmw">BMW</option>        
                </select>
            </div>

            <br>
            <input id="botonEnviar" type="submit" class="btn btn-primary" value="Calcular Venta">
            
            </form>
        </section>
    <?php
    if(isset($_POST["txtPrecioCompra"]) && isset($_POST["rbOrigen"]) && isset($_POST["cmdMarca"])){
    $precioCompra = $_POST["txtPrecioCompra"];
    $origen = $_POST["rbOrigen"];
    $marca = $_POST["cmdMarca"];
    //echo "$precioCompra $origen $marca";
    $impuesto = 0.0;
    $total;
    if($precioCompra == 0){
        echo "<br>no ingresado compra";
    }else{
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
        
        <section id="factura">
            <h2>Factura</h2>
            <?php
            if( $marca == "selecione "){
                echo "No Ingreso Marca";
            }else{
                echo "<p> Precio Compra: $precioCompra <br>
                  Origen: $origen <br>
                  Marca: $marca <br>
                  Total de compra: $total </p>";
            }  
    }//llave de precio compra vacio    
    }else{
        echo "<br> No haz echo nada";
    }        
    ?>
        </section>

    </main>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


