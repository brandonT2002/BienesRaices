<?php
    include './includes/templates/header.php'
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>
                    Nuestro equipo de profesionales ha desarrollado un profundo conocimiento del mercado, permitiéndonos ofrecer asesoramiento experto y soluciones personalizadas a cada uno de nuestros clientes. Hemos sido testigos de las tendencias cambiantes y hemos sabido adaptarnos a ellas, siempre manteniendo nuestro compromiso con la excelencia.
                </p>

                <p>
                    La confianza que nuestros clientes depositan en nosotros es un reflejo de nuestro historial de éxito y dedicación. Cada transacción que gestionamos está respaldada por nuestra vasta experiencia y un enfoque meticuloso en cada detalle.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>Sabemos que comprar o vender una propiedad es una decisión crucial. Por eso, garantizamos un entorno seguro en cada etapa. Nuestros expertos en bienes raíces aseguran transacciones transparentes y confiables, protegiendo siempre tus intereses.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Creemos que todos merecen el mejor valor posible. Ofrecemos precios competitivos y justos, ayudándote a encontrar la propiedad perfecta sin afectar tu presupuesto. Nuestra red y conocimiento del mercado nos permiten negociar las mejores condiciones para ti.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Tu tiempo es valioso. Nos dedicamos a hacer el proceso de compra o venta lo más eficiente posible. Desde la primera consulta hasta la firma final, cada paso es ágil y efectivo, para que puedas concentrarte en lo que importa.</p>
            </div>
        </div>
    </section>

<?php
    include 'includes/templates/footer.php'
?>