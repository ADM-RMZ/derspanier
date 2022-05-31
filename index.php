<?php 
    require 'includes/funciones.php';    
    incluirTemplate('header', $inicio = true); 
?>

    <section class="bienvenida seccion">
        <h1 class="bienvenida__heading">Willkommen auf der Website<span>Der Spanier</span> </h1>
        <p class="bienvenida__texto">dem spanischen Spezialitätengeschäft in Bielefeld</p>
    </section>

    <section class="swiper contenedor">
        <ul class="swiper-wrapper">
            <li class="swiper-slide">
                <img class="slider__imagen" src="build/img/slide_jamon01.png" alt="imagen slide">
            </li>
            <li class="swiper-slide">
                <img class="slider__imagen" src="build/img/slide_kasse01.png" alt="imagen slide">
            </li>
            <li class="swiper-slide">
                <img class="slider__imagen" src="build/img/slide_wein01.png" alt="imagen slide">
            </li>
            <li class="swiper-slide">
                <img class="slider__imagen" src="build/img/slide_empanadas01.png" alt="imagen slide">
            </li>
            <li class="swiper-slide">
                <img class="slider__imagen" src="build/img/slide_food01.png" alt="imagen slide">
            </li>
            
        </ul>
    </section>

    <section class="cards">
        <div class="cards__grid contenedor">
            <div class="card">
                <img class="card__imagen" src="build/img/nosotros_01.png" alt="imagen card">
                <div class="card__contenido">
                    <h2 class="card__heading">Über <span>uns</span> </h2>
                    <a class="card__enlace" href="ueber-uns.php">Weiterlesen</a>
                </div>
            </div>

            <div class="card">
                <img class="card__imagen" src="build/img/servicio_laden.png" alt="imagen card">
                <div class="card__contenido">
                    <h2 class="card__heading">Besuchen Sie unser <span>Markt</span> </h2>
                    <a class="card__enlace" href="produkte.php">Weiterlesen</a>
                </div>
            </div>
        </div>
    </section>

    <section class="horario">
        <div class="horario__grid contenedor">
            <div class="horario__contenido">
                <h3 class="horario__heading">Öffnungszeiten</h3>
                <p class="horario__texto">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil optio, maxime, deleniti aperiam atque in praesentium suscipit autem minus aliquam molestias eos, adipisci vero id enim doloribus ex rem delectus.
                </p>

                <table class="tabla">
                    <thead class="tabla__thead">
                        <tr>
                            <th class="tabla__th">Tag</th>
                            <th class="tabla__th">von</th>
                            <th class="tabla__th">bis</th>
                        </tr>
                    </thead>

                    <tbody class="tabla__tbody">
                        <tr class="tabla__tr">
                            <td class="tabla__td">Montag</td>
                            <td class="tabla__td">10:00 - 13:00</td>
                            <td class="tabla__td">14:30 - 18:30</td>
                        </tr>

                        <tr class="tabla__tr">
                            <td class="tabla__td">Dienstag</td>
                            <td class="tabla__td">10:00 - 13:00</td>
                            <td class="tabla__td">14:30 - 18:30</td>
                        </tr>

                        <tr class="tabla__tr">
                            <td class="tabla__td">Mittwoch</td>
                            <td class="tabla__td">10:00 - 13:00</td>
                            <td class="tabla__td">14:30 - 18:30</td>
                        </tr>

                        <tr class="tabla__tr">
                            <td class="tabla__td">Donnerstag</td>
                            <td class="tabla__td">10:00 - 13:00</td>
                            <td class="tabla__td">14:30 - 18:30</td>
                        </tr>

                        <tr class="tabla__tr">
                            <td class="tabla__td">Freitag</td>
                            <td class="tabla__td">10:00 - 13:00</td>
                            <td class="tabla__td">14:30 - 18:30</td>
                        </tr>

                        <tr class="tabla__tr">
                            <td class="tabla__td">Samstag</td>
                            <td class="tabla__td">10:00 - 13:00</td>
                            <td class="tabla__td">14:30 - 18:30</td>
                        </tr>

                        <tr class="tabla__tr">
                            <td class="tabla__td">Sonntag</td>
                            <td class="tabla__td" colspan="2">geschlossen</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <main class="productos contenedor seccion">
        <h2 class="productos__heading">unsere<span>Produkte</span></h2>

        <div class="productos__grid">
            <div class="producto">
                <div class="producto__mask">
                    <img class="producto__imagen" src="build/img/producto01.png" alt="imagen producto">
                </div>
                <div class="producto__contenido">
                    <h3 class="producto__nombre">Wurstwaren</h3>
                    <p class="producto__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eveniet neque</p>
                </div>
            </div>
            <div class="producto">
                <div class="producto__mask">
                    <img class="producto__imagen" src="build/img/producto02.png" alt="imagen producto">
                </div>
                <div class="producto__contenido">
                    <h3 class="producto__nombre">Käsesorten</h3>
                    <p class="producto__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eveniet neque</p>
                </div>
            </div>
            <div class="producto">
                <div class="producto__mask">
                    <img class="producto__imagen" src="build/img/producto03.png" alt="imagen producto">
                </div>
                <div class="producto__contenido">
                    <h3 class="producto__nombre">Meeresfrüchte</h3>
                    <p class="producto__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eveniet neque</p>
                </div>
            </div>
            <div class="producto">
                <div class="producto__mask">
                    <img class="producto__imagen" src="build/img/producto04.png" alt="imagen producto">
                </div>
                <div class="producto__contenido">
                    <h3 class="producto__nombre">Wein / Spirituosen</h3>
                    <p class="producto__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eveniet neque</p>
                </div>
            </div>            
        </div>
    </main>

    <section class="cita">
        <h2 class="cita__heading">der Spanier</h2>
        <p class="cita__texto">Lassen Sie sich verzaubern von den mediterranen Spezialitäten und vielleicht einem schönen Glas
            spanischen Wein aus unserem reichhaltigen Angebot. Einfach abschalten und sich wie im Urlaub fühlen, inmitten des Zentrums von Bielefeld.</p>
    </section>

    <section class="anreise seccion">
        <div id="mapa" class="anreise__mapa"></div>
    </section>
    
<?php 
    incluirTemplate('footer');
?>