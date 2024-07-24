<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min="1">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Ej: 3" min="1">

                <label for="estacionamiento">Estacionamiento::</label>
                <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <label for="vendedores">Vendedores</label>
                <select name="vendedores" id="vendedores">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>