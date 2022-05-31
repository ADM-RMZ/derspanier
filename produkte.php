<?php require 'includes/funciones.php';    
    incluirTemplate('header'); 
?>
    <main class="sortiment contenedor seccion">

        <h2 class="sortiment__heading">unsere<span>Produkte</span></h2>

        <div class="sortiment__grid">
            <div class="sortiert">
                    <a href="/schinken">
                        <img class="sortiert__imagen" src="build/img/producto01.png" alt="imagen producto">
                        <p class="sortiert__nombre">Jamón Serrano</p>
                    </a>

            </div>

            <div class="sortiert">
                <a href="/wurst">
                    <img class="sortiert__imagen" src="build/img/produkte_salchichon01.png" alt="imagen producto">
                    <p class="sortiert__nombre">Wurst</p>
                </a>
                
            </div>

            <div class="sortiert">
                    <a href="/kaesesorten">
                        <img class="sortiert__imagen" src="build/img/producto02.png" alt="imagen producto">
                        <p class="sortiert__nombre">Käsesorten</p>
                    </a>
            </div>

            <div class="sortiert">
                    <a href="/meeresfruechte">
                        <img class="sortiert__imagen" src="build/img/producto03.png" alt="imagen producto">
                        <p class="sortiert__nombre">Meeresfrüchte</p>
                    </a>
            </div>

            <div class="sortiert">
                    <a href="/wein-spirituosen">
                        <img class="sortiert__imagen" src="build/img/producto04.png" alt="imagen producto">
                        <p class="sortiert__nombre">Wein / Spirituosen</p>
                    </a>
            </div>

            <div class="sortiert">
                    <a href="/gewuerze">
                        <img class="sortiert__imagen" src="build/img/produkte_sauce01.png" alt="imagen producto">
                        <p class="sortiert__nombre">Gewürze / Saucen</p>
                    </a>
            </div>

            <div class="sortiert">
                <a href="/oliven">
                    <img class="sortiert__imagen" src="build/img/produkte_olive01.png" alt="imagen producto">
                    <p class="sortiert__nombre">Oliven</p>
                </a>
        </div>

        <div class="sortiert">
                <a href="/olivenoel">
                    <img class="sortiert__imagen" src="build/img/produkte_oliveoel01.png" alt="imagen producto">
                    <p class="sortiert__nombre">Olivenöl - Essig</p>
                </a>
        </div>

        <div class="sortiert">
                <a href="/praesentkoerbe">
                    <img class="sortiert__imagen" src="build/img/produkte_koerbe01.png" alt="imagen producto">
                    <p class="sortiert__nombre">Präsentkörbe</p>
                </a>
        </div>
        </div>
    </main>
<?php 
    incluirTemplate('footer');
?>