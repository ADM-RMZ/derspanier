
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>der Spanier</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:wght@400;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>

    <header class="header ">
        <div class="header__grid contenedor">
            <div class="header__logo">
                <a href="/">
                    <img src="build/img/logo.svg" alt="logo der Spanier">
                </a>
            </div>

            <div class=" mobile-menu">
                <img src="/build/img/barras.svg" alt="icono menu responsive">
            </div>
            
            <nav class="navegacion">
                <a class="navegacion__enlace" href="/">Startseite</a>
                <a class="navegacion__enlace" href="/ueber-uns">Über uns</a>
                <a class="navegacion__enlace" href="/produkte">Produkte</a>
                <a class="navegacion__enlace" href="/kontakt">kontakt</a>
            </nav>
            
        </div>

        <?php if ($inicio) { ?>
            <div class="contenedor">
                <div class="header__contenido">
                    <h1 class="header__heading">Spanische Spezialitäten mitten in Bieleld</h1>
                    <p class="header__texto">Einen kleinen Kurzurlaub machen im südlichen Spanien,
                        so könnte man einen Besuch im "Der Spanier" beschreiben</p>
                </div>
            </div>
            <img class="header__flag" src="build/img/header_flag.png" alt="imagen header">
            
        <?php } ?>

    </header>