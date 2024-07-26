<?php
    require '../../includes/config/database.php';
    $db = conectarDB();

    // consultar vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // errores
    $errores = [];

    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';

        // echo '<pre>';
        // var_dump($_FILES);
        // echo '</pre>';

        // exit;

        $titulo          = mysqli_real_escape_string($db, $_POST['titulo']);
        $precio          = mysqli_real_escape_string($db, $_POST['precio']);
        $descripcion     = mysqli_real_escape_string($db, $_POST['descripcion']);
        $habitaciones    = mysqli_real_escape_string($db, $_POST['habitaciones']);
        $wc              = mysqli_real_escape_string($db, $_POST['wc']);
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
        $vendedorId      = mysqli_real_escape_string($db, $_POST['vendedor']);
        $creado          = mysqli_real_escape_string($db, date('Y/m/d'));

        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if (!$titulo || !$precio || !$descripcion || !$habitaciones || !$wc || !$estacionamiento) {
            $errores[] = 'Todos los campos son obligatorios';
        }

        if (!$vendedorId) {
            $errores[] = 'Elige un Vendedor';
        }

        if (!$imagen['name'] || $imagen['error']) {
            $errores[] = 'La Imagen es Obligatoria';
        }

        // validar el tamaño de la imagen
        $medida = 1000 * 100;
        if ($imagen['size'] > $medida) {
            $errores[] = 'La imagen es muy pesada';
        }

        if (empty($errores)) {
            // Insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, Vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

            // echo $query;
            $resultado = mysqli_query($db, $query);
            if ($resultado) {
                // redireccionar al usuario
                header('Location: /admin');
            }
        }
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/Propiedades//crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" value="<?php echo $habitaciones ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" value="<?php echo $wc ?>">

                <label for="estacionamiento">Estacionamiento::</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" value="<?php echo $estacionamiento ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <label for="vendedor">Vendedores</label>
                <select name="vendedor" id="vendedor">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : '' ?> value="<?php echo $vendedor['id'] ?>"> <?php echo $vendedor['nombre'] . ' ' . $vendedor['apellido']; ?></option>
                    <?php endwhile ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>