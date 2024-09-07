<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div id="contenedorTotal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 filtros">
                    <h1 class="titulo">FILTROS</h1>
                    <div class="row">
                        <h2>marca</h2>
                        <select id="marca">
                            
                        </select>
                    </div>


                    <div class="row mt-3">
                        <h2>modelo</h2>
                        <select id="modelo">
                        </select>
                    </div>


                    <div class="row mt-3">
                        <h2>año</h2>
                        <select id="agno">
                        </select>
                    </div>


                    <div class="row mt-3">
                        <h2>precio Minimo</h2>
                        <input type="number" id="precioMin">
                    </div>


                    <div class="row mt-3">
                        <h2>precio Maximo</h2>
                        <input type="number" id="precioMax">
                    </div>


                    <div class="row mt-3">
                        <h2>palabra Clave</h2>
                        <input type="text" id="palabraClave">
                    </div>


                    <div class="row mt-3 contenedorBotones">
                        <button class="buscador" id="buscador">buscar</button>
                        <button class="buscador" id="vaciar">vaciar</button>
                        <p id="errores"></p>
                    </div>


                </div>

                <div class="col-lg-6 col-12" id="resultados">


                </div>


            </div>

        </div>
    </div>












    <script src="app.js"></script>
</body>

</html>