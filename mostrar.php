<!doctype html>
<html lang="es">

<head>
    <title>Mostrar preferencias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3d84f5d0ab.js" crossorigin="anonymous"></script>
</head>
<!-- Establezco la clase que da un color gris claro al fondo con bootstrap-->

<body class="bg-secondary-subtle">

    <?php
    /**Recupero la sesion para recuperar las preferencias.*/
    session_start();

    /**Las siguientes lineas hacen que las variables muestren Elegir si no se ha establecido en la sesion el valor. */
    $idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : 'Elegir';
    $perfil = isset($_SESSION['perfil']) ? $_SESSION['perfil'] : 'Elegir';
    $zHoraria = isset($_SESSION['zHoraria']) ? $_SESSION['zHoraria'] : 'Elegir';
    ?>

    </br></br>
    <!--Uso la estructura card de bootstrap para darle el aspecto de ventana. Success pinta de color verde la ventana, w-50 
            determina el ancho y mx-auto centra la ventana. -->
    <div class="card bg-success text-white w-50 mx-auto">

        <div class="card-body">

            <form action="" method="post">

                <h3><i class="fa-solid fa-user-gear"></i>Preferencias</h3>

                <?php
                /**Si se pulsa borrar se elimina la informacion de las variables de sesion. Ademas muestra un mensaje avisando de lo ocurrido. */
                if (isset($_POST['borrar'])) {
                    unset($_SESSION['idioma']);
                    unset($_SESSION['perfil']);
                    unset($_SESSION['zHoraria']);
                ?>
                    <p class="text-danger">Preferencias Borradas.</p>
                <?php
                }

                /**Si no se ha pulsado borrar pero ademas no esta establecida la variable de sesion idioma (con una es suficiente, aunque 
                 * sería más correcto que se incluyeran todas) se muestra un mensaje avisando de que hay que fijarlas. */
                if (!isset($_POST['borrar']) & !isset($_SESSION['idioma'])) {
                ?>
                    <p class="text-danger">
                        Debes fijar primero las preferencias.</p>

                <?php
                }

                /**Si se pulsa establecer, se dirige a la página de establecer preferencias. */
                if (isset($_POST['establecer'])) {
                    header('Location:preferencias.php');
                }
                ?>


                <!-- form-row reduce el tamaño entre las columnas que crea la propiedad de bootstrap row-->
                <div class="form-row">
                    <!--form-group ayuda a agrupar etiquetas, en este caso el input-->
                    <div class="form-group col-md-6">
                        <p>Idioma:
                            <?php echo $idioma; ?></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Perfil Público:
                            <?php echo $perfil; ?></p>
                    </div>

                    <div class="form-group col-md-6">
                        <p>Zona Horaria:
                            <?php echo $zHoraria; ?></p>
                    </div>

                    <button type="submit" name="establecer" class="btn btn-primary btn-sm">Establecer</button>
                    <button type="submit" name="borrar" class="btn btn-danger btn-sm">Borrar</button>

                </div>
            </form>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>