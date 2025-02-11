<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img src="build/img/icono_estacionamiento.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img src="build/img/icono_dormitorio.svg" alt="icono wc" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

            <p>
                Descubre la serenidad y el lujo en la "Casa frente al bosque", una impresionante propiedad que combina comodidad y naturaleza en un solo lugar. Esta casa cuenta con 4 amplias habitaciones, ideales para familias grandes o para recibir a tus invitados con el máximo confort.
            </p>

            <p>
                Con 3 baños bien equipados, nunca tendrás que preocuparte por la falta de espacio ni de comodidad. Además, el garaje tiene espacio suficiente para 3 vehículos, ofreciendo seguridad y conveniencia para toda la familia.
            </p>

            <p>
                Uno de los mayores atractivos de esta propiedad son sus vistas privilegiadas al bosque. Disfruta de la tranquilidad y belleza natural desde la comodidad de tu hogar, ya sea desde el salón, la cocina o las habitaciones.
            </p>

            <p>
                La "Casa frente al bosque" es el refugio perfecto para aquellos que buscan un equilibrio entre la vida moderna y el contacto con la naturaleza. No pierdas la oportunidad de vivir en un lugar donde cada día se siente como unas vacaciones.
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>