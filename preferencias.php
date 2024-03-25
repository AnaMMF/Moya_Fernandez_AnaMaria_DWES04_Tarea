<!doctype html>
<html lang="es">

<head>
    <title>Preferencias sesión - tarea 4 DWES</title>
    <!-- Required meta tags -->
    <!--Hago uso de la extencion Bootsrapt 5 Quick Snippets que me ayuda a intriducir rapidamente ciertas
        estructuras de bootstrap 5-->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3d84f5d0ab.js" crossorigin="anonymous"></script>
</head>
<!-- Establezco la clase que da un color gris claro al fondo con bootstrap-->

<body class="bg-secondary-subtle">

    <?php
    /**Recupero la sesion para que se guarden las preferencias, ya que esta se inicia por defecto.*/
    session_start();

    /**Si se pulsa submit, se guarda en variables de la sesion los valores introducidos en el formulario, ademas se establece como true la variable
     * establecidas, que me sirve mas adelante para mostrar el debido mensaje en pantalla.
     */
    if (isset($_POST['submit'])) {
        $_SESSION["idioma"] = $_POST["idioma"];
        $_SESSION["perfil"] = $_POST["perfil"];
        $_SESSION["zHoraria"] = $_POST["zHoraria"];
        $establecidas = true;
    }
    /**Las siguientes lineas hacen que en el formulario se muestre Elegir si no se ha establecido en la sesion el valor. */
    $idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : 'Elegir';
    $perfil = isset($_SESSION['perfil']) ? $_SESSION['perfil'] : 'Elegir';
    $zHoraria = isset($_SESSION['zHoraria']) ? $_SESSION['zHoraria'] : 'Elegir';

    ?>


    </br></br>

    <!--Uso la estructura card de bootstrap para darle el aspecto de ventana. w-50 determina el ancho y mx-auto centra la ventana. -->
    <div class="card w-50 mx-auto">
        <div class="card-header">
            <h3>Preferencias Usuario</h3>
        </div>
        <div class="card-body">
            <!--El formulario se mandara por el metodo post-->
            <form action="" method="post">

                <?php
                /**Si establecidas es true, se imprime el mensaje en pantalla. */
                if (isset($establecidas)) {
                ?>
                    <p class="text-primary">Preferencias establecidas</p>
                <?php
                }
                ?>

                <h6>Idioma</h6>
                <!-- Agrupo los input para darle estilo. Los iconos son introducidos con la etiqueta i. -->

                <div class="input-group mb-3">
                    <label class="input-group-text" for="idioma"><i class="fa-solid fa-language"></i></label>
                    <select class="form-select" name="idioma" id="idioma">
                        <option selected><?php echo $idioma; ?></option>
                        <option value="Español">Español</option>
                        <option value="Inglés">Inglés</option>
                    </select>
                </div>

                <h6>Perfil Público</h6>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="perfil"><i class="fa-solid fa-users"></i></label>
                    <select class="form-select" name="perfil" id="perfil">
                        <option selected><?php echo $perfil; ?></option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <h6>Zona horaria</h6>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="zHoraria"><i class="fa-regular fa-clock"></i></label>
                    <select class="form-select" name="zHoraria" id="zHoraria">
                        <option selected><?php echo $zHoraria; ?></option>
                        <option value="GTM-2">GTM-2</option>
                        <option value="GTM-1">GTM-1</option>
                        <option value="GTM0">GTM0</option>
                        <option value="GTM+1">GTM+1</option>
                        <option value="GTM+2">GTM+2</option>
                    </select>
                </div>


                <!--Anido un input que sirve de boton en un enlace para poder ir a la página que muestra las preferencias.-->
                <a class="btn bts-info" href="mostrar.php">
                    <input type='button' class='btn btn-primary btn-sm' name='enviar' value='Mostrar preferencias'></a>

                <button type="submit" name="submit" class="btn btn-success btn-sm">Establecer preferencias</button>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>