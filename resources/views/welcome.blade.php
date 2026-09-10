<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atlas | Travel Editorial</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f4f1e9;
            color: #20211e;
            font-family: 'DM Sans', sans-serif;
        }

        img {
            display: block;
            width: 100%;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .wrapper {
            width: 90%;
            margin: auto;
        }

        /* ==============================
           HEADER
        ============================== */

        header {
            height: 88px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;
            background: #f4f1e9;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 31px;
            font-weight: 600;
            letter-spacing: -1px;
        }

        .logo span {
            font-style: italic;
            color: #687363;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            font-size: 11px;
            letter-spacing: 1.7px;
            text-transform: uppercase;
            color: #53554f;
        }

        nav a:hover {
            color: #111;
        }

        .edition {
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #89857a;
        }

        /* ==============================
           HERO
        ============================== */

        .hero {
            width: 92%;
            margin: auto;
            min-height: 700px;

            display: grid;
            grid-template-columns: 42% 58%;

            background: #ded8cb;
            overflow: hidden;
            border-radius: 3px 3px 26px 26px;
        }

        .hero-left {
            padding: 60px 11%;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .hero-label {
            display: flex;
            align-items: center;
            gap: 14px;

            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #65665f;
        }

        .hero-label::before {
            content: "";
            width: 42px;
            height: 1px;
            background: #65665f;
        }

        .hero-title {
            margin-top: 40px;
        }

        .hero-title h1 {
            font-family: 'Playfair Display', serif;
            font-size: 72px;
            font-weight: 500;
            line-height: .95;
            letter-spacing: -2px;
        }

        .hero-title h1 em {
            display: block;
            color: #65705f;
        }

        .hero-title p {
            margin-top: 25px;
            max-width: 420px;
            color: #62635d;
            line-height: 1.8;
            font-size: 14px;
        }

        .hero-button {
            display: inline-block;
            margin-top: 28px;
            padding: 14px 24px;

            background: #242920;
            color: white;

            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;

            border-radius: 40px;
        }

        .hero-bottom {
            display: flex;
            justify-content: space-between;
            align-items: end;

            border-top: 1px solid #bcb6aa;
            padding-top: 20px;
        }

        .hero-bottom small {
            font-size: 9px;
            letter-spacing: 2px;
            color: #75746c;
            text-transform: uppercase;
        }

        .hero-bottom strong {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 500;
        }

        .hero-image {
            position: relative;
            min-height: 700px;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-tag {
            position: absolute;
            right: 25px;
            top: 25px;

            padding: 10px 15px;
            border-radius: 30px;

            background: rgba(244, 241, 233, .90);

            font-size: 9px;
            letter-spacing: 1.7px;
            text-transform: uppercase;
        }

        .hero-caption {
            position: absolute;
            left: 25px;
            bottom: 25px;

            background: rgba(22, 26, 22, .88);
            color: white;

            padding: 18px 22px;
            max-width: 270px;
        }

        .hero-caption small {
            font-size: 8px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #d6d5cf;
        }

        .hero-caption h3 {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            margin-top: 5px;
            font-weight: 500;
        }

        /* ==============================
           INFO STRIP
        ============================== */

        .stats {
            width: 86%;
            margin: 80px auto 110px;

            display: grid;
            grid-template-columns: repeat(4, 1fr);

            border-top: 1px solid #cbc5b9;
            border-bottom: 1px solid #cbc5b9;
        }

        .stat {
            padding: 30px;
            border-right: 1px solid #cbc5b9;
        }

        .stat:last-child {
            border-right: none;
        }

        .stat strong {
            display: block;

            font-family: 'Playfair Display', serif;
            font-size: 39px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .stat span {
            font-size: 9px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #77766d;
        }

        /* ==============================
           SECTION TITLES
        ============================== */

        .section-header {
            width: 86%;
            margin: 0 auto 35px;

            display: flex;
            justify-content: space-between;
            align-items: end;
        }

        .section-number {
            font-size: 10px;
            letter-spacing: 2px;
            color: #888277;
            margin-bottom: 8px;
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 52px;
            font-weight: 500;
            line-height: 1;
        }

        .section-header p {
            max-width: 380px;
            color: #6b6963;
            font-size: 13px;
            line-height: 1.8;
        }

        /* ==============================
           DESTINATIONS
        ============================== */

        .destinations {
            width: 86%;
            margin: auto;

            display: grid;
            grid-template-columns: 1.15fr .85fr .85fr;
            gap: 18px;
        }

        .destination {
            background: #fff;
            overflow: hidden;
        }

        .destination-image {
            height: 385px;
            position: relative;
            overflow: hidden;
        }

        .destination:first-child .destination-image {
            height: 490px;
        }

        .destination-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s;
        }

        .destination:hover img {
            transform: scale(1.035);
        }

        .image-number {
            position: absolute;
            top: 17px;
            left: 17px;

            width: 38px;
            height: 38px;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #f4f1e9;
            font-size: 10px;
        }

        .destination-content {
            padding: 23px;
        }

        .destination-content span {
            font-size: 9px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #8a8275;
        }

        .destination-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 500;
            margin: 6px 0 10px;
        }

        .destination-content p {
            font-size: 12px;
            line-height: 1.7;
            color: #686761;
        }

        /* ==============================
           FEATURE
        ============================== */

        .feature {
            width: 86%;
            margin: 120px auto;

            display: grid;
            grid-template-columns: 1.05fr .95fr;
            min-height: 590px;
        }

        .feature-image img {
            height: 100%;
            object-fit: cover;
        }

        .feature-content {
            background: #263027;
            color: #f4f1e9;
            padding: 65px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .feature-content span {
            font-size: 9px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #c3c7bf;
        }

        .feature-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 55px;
            font-weight: 500;
            line-height: 1.05;
            margin: 16px 0 25px;
        }

        .feature-content p {
            color: #d1d4ce;
            line-height: 1.9;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .feature-facts {
            margin-top: 15px;
        }

        .fact {
            border-top: 1px solid #50584f;
            padding: 15px 0;

            display: flex;
            justify-content: space-between;

            font-size: 11px;
        }

        /* ==============================
           SEVEN WONDERS
        ============================== */

        .wonders {
            width: 86%;
            margin: auto;

            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        .wonder {
            background: #e5ded1;
            position: relative;
            overflow: hidden;
        }

        .wonder:nth-child(1),
        .wonder:nth-child(4) {
            grid-column: span 2;
        }

        .wonder-image {
            height: 320px;
            overflow: hidden;
        }

        .wonder:nth-child(1) .wonder-image,
        .wonder:nth-child(4) .wonder-image {
            height: 390px;
        }

        .wonder-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s;
        }

        .wonder:hover img {
            transform: scale(1.03);
        }

        .wonder-info {
            padding: 19px;
        }

        .wonder-info small {
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #817b70;
        }

        .wonder-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 500;
            margin: 5px 0;
        }

        .wonder-info p {
            color: #68655f;
            font-size: 11px;
            line-height: 1.6;
        }

        /* ==============================
           TRAVEL STYLES
        ============================== */

        .travel-types {
            width: 86%;
            margin: 120px auto;

            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 50px;
        }

        .travel-intro {
            padding-right: 20px;
        }

        .travel-intro span {
            font-size: 9px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #858075;
        }

        .travel-intro h2 {
            font-family: 'Playfair Display', serif;
            font-size: 51px;
            font-weight: 500;
            margin: 13px 0 20px;
            line-height: 1.05;
        }

        .travel-intro p {
            color: #696761;
            line-height: 1.8;
            font-size: 13px;
        }

        .types-list {
            border-top: 1px solid #c6c0b4;
        }

        .type {
            padding: 21px 0;
            border-bottom: 1px solid #c6c0b4;

            display: grid;
            grid-template-columns: 50px 1fr 1fr;
            align-items: center;
            gap: 25px;
        }

        .type-number {
            font-size: 10px;
            color: #918b7f;
        }

        .type h3 {
            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 500;
        }

        .type p {
            font-size: 11px;
            color: #6b6963;
            line-height: 1.6;
        }

        /* ==============================
           FINAL EDITORIAL BLOCK
        ============================== */

        .closing {
            width: 92%;
            margin: 0 auto 0;

            min-height: 530px;
            position: relative;

            background:
                linear-gradient(
                    rgba(14, 18, 15, .15),
                    rgba(14, 18, 15, .65)
                ),
                url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1800&q=90');

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: end;

            border-radius: 25px 25px 0 0;
        }

        .closing-content {
            color: white;
            padding: 60px 7%;
            max-width: 820px;
        }

        .closing-content span {
            font-size: 9px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .closing-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 62px;
            font-weight: 500;
            line-height: 1.02;
            margin: 12px 0 18px;
        }

        .closing-content p {
            font-size: 13px;
            line-height: 1.8;
            max-width: 590px;
        }

        /* ==============================
           FOOTER
        ============================== */

        footer {
            background: #20251e;
            color: #f4f1e9;
            padding: 55px 7% 25px;
        }

        .footer-main {
            display: flex;
            justify-content: space-between;
            align-items: end;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
        }

        .footer-info {
            text-align: right;
            font-size: 10px;
            line-height: 1.8;
            color: #bdbdb5;
        }

        .footer-line {
            height: 1px;
            background: #4c514a;
            margin: 35px 0 18px;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            font-size: 9px;
            color: #9fa19b;
            letter-spacing: 1px;
        }

        /* ==============================
           RESPONSIVE
        ============================== */

        @media(max-width: 900px) {

            nav,
            .edition {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;
            }

            .hero-left {
                min-height: 500px;
            }

            .hero-title h1 {
                font-size: 55px;
            }

            .hero-image {
                min-height: 520px;
            }

            .stats {
                grid-template-columns: 1fr 1fr;
            }

            .stat:nth-child(2) {
                border-right: none;
            }

            .destinations {
                grid-template-columns: 1fr;
            }

            .feature {
                grid-template-columns: 1fr;
            }

            .feature-image {
                height: 480px;
            }

            .wonders {
                grid-template-columns: 1fr;
            }

            .wonder:nth-child(1),
            .wonder:nth-child(4) {
                grid-column: auto;
            }

            .travel-types {
                grid-template-columns: 1fr;
            }

            .type {
                grid-template-columns: 35px 1fr;
            }

            .type p {
                grid-column: 2;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .footer-main,
            .footer-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .footer-info {
                text-align: left;
            }
        }

    </style>
</head>

<body>


    <!-- HEADER -->

    <header>

        <div class="logo">
            Atlas<span>.</span>
        </div>

        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#destinos">Destinos</a>
            <a href="#maravillas">Maravillas</a>
            <a href="#experiencias">Experiencias</a>
        </nav>

        <div class="edition">
            Travel Journal · Vol. 01
        </div>

    </header>


    <!-- HERO -->

    <section class="hero" id="inicio">

        <div class="hero-left">

            <div>

                <div class="hero-label">
                    Explore the world
                </div>

                <div class="hero-title">

                    <h1>
                        Historias que comienzan
                        <em>con un destino.</em>
                    </h1>

                    <p>
                        Una guía visual para descubrir paisajes, ciudades,
                        maravillas del mundo y experiencias que hacen de cada
                        viaje una historia diferente.
                    </p>

                    <a class="hero-button" href="#destinos">
                        Comenzar el viaje
                    </a>

                </div>

            </div>


            <div class="hero-bottom">

                <div>
                    <small>Edición</small>
                    <strong>2026</strong>
                </div>

                <div>
                    <small>Curated by</small>
                    <strong>Atlas</strong>
                </div>

            </div>

        </div>


        <div class="hero-image">

            <img
                src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=1800&q=90"
                alt="Viaje por carretera">

            <div class="hero-tag">
                Travel inspiration
            </div>

            <div class="hero-caption">
                <small>Road stories</small>
                <h3>El viaje también está en el camino.</h3>
            </div>

        </div>

    </section>


    <!-- STATS -->

    <section class="stats">

        <div class="stat">
            <strong>7</strong>
            <span>Maravillas modernas</span>
        </div>

        <div class="stat">
            <strong>6</strong>
            <span>Continentes para explorar</span>
        </div>

        <div class="stat">
            <strong>∞</strong>
            <span>Formas de viajar</span>
        </div>

        <div class="stat">
            <strong>01</strong>
            <span>Próxima aventura</span>
        </div>

    </section>


    <!-- DESTINOS -->

    <section id="destinos">

        <div class="section-header">

            <div>
                <div class="section-number">01 / DESTINOS</div>

                <h2>
                    Lugares que vale<br>
                    la pena descubrir.
                </h2>
            </div>

            <p>
                Una selección entre cultura, naturaleza y paisajes
                que ofrecen experiencias completamente diferentes.
            </p>

        </div>


        <div class="destinations">

            <article class="destination">

                <div class="destination-image">

                    <img
                        src="https://images.unsplash.com/photo-1533104816931-20fa691ff6ca?auto=format&fit=crop&w=1200&q=90"
                        alt="Santorini">

                    <div class="image-number">
                        01
                    </div>

                </div>

                <div class="destination-content">
                    <span>Grecia · Mediterráneo</span>

                    <h3>Santorini</h3>

                    <p>
                        Arquitectura blanca, mar Egeo y algunos de los
                        atardeceres más reconocidos del Mediterráneo.
                    </p>
                </div>

            </article>


            <article class="destination">

                <div class="destination-image">

                    <img
                        src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1000&q=90"
                        alt="Bali">

                    <div class="image-number">
                        02
                    </div>

                </div>

                <div class="destination-content">
                    <span>Indonesia · Cultura</span>

                    <h3>Bali</h3>

                    <p>
                        Naturaleza tropical, templos y una cultura marcada
                        por la espiritualidad y sus tradiciones.
                    </p>
                </div>

            </article>


            <article class="destination">

                <div class="destination-image">

                    <img
                        src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1000&q=90"
                        alt="Montañas">

                    <div class="image-number">
                        03
                    </div>

                </div>

                <div class="destination-content">
                    <span>Canadá · Naturaleza</span>

                    <h3>Banff</h3>

                    <p>
                        Lagos de montaña, senderos y paisajes naturales
                        dentro de las Montañas Rocosas canadienses.
                    </p>
                </div>

            </article>

        </div>

    </section>


    <!-- FEATURE -->

    <section class="feature">

        <div class="feature-image">

            <img
                src="https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1300&q=90"
                alt="Machu Picchu">

        </div>


        <div class="feature-content">

            <span>Destination story · Perú</span>

            <h2>
                Machu Picchu,
                entre historia y montaña.
            </h2>

            <p>
                Construida por la civilización inca y rodeada por los Andes,
                Machu Picchu combina arquitectura, historia y un paisaje
                que la convirtió en uno de los lugares más reconocidos del mundo.
            </p>

            <div class="feature-facts">

                <div class="fact">
                    <span>País</span>
                    <strong>Perú</strong>
                </div>

                <div class="fact">
                    <span>Experiencia</span>
                    <strong>Historia + naturaleza</strong>
                </div>

                <div class="fact">
                    <span>Ideal para</span>
                    <strong>Cultura y aventura</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- MARAVILLAS -->

    <section id="maravillas">

        <div class="section-header">

            <div>
                <div class="section-number">02 / ICONIC PLACES</div>

                <h2>
                    Las maravillas<br>
                    que cuentan historia.
                </h2>
            </div>

            <p>
                Monumentos que representan siglos de arquitectura,
                cultura e historia alrededor del mundo.
            </p>

        </div>


        <div class="wonders">

            <!-- PETRA -->

            <article class="wonder">

                <div class="wonder-image">
                    <img
                        src="https://images.unsplash.com/photo-1579606032821-4e6161c81bd3?auto=format&fit=crop&w=1200&q=90"
                        alt="Petra">
                </div>

                <div class="wonder-info">
                    <small>Jordania · Historia</small>
                    <h3>Petra</h3>
                    <p>
                        Antigua ciudad tallada directamente sobre formaciones
                        de roca en el desierto jordano.
                    </p>
                </div>

            </article>


            <!-- TAJ MAHAL -->

            <article class="wonder">

                <div class="wonder-image">
                    <img
                        src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=900&q=90"
                        alt="Taj Mahal">
                </div>

                <div class="wonder-info">
                    <small>India · Arquitectura</small>
                    <h3>Taj Mahal</h3>
                    <p>
                        Una de las obras arquitectónicas más reconocidas de India.
                    </p>
                </div>

            </article>


            <!-- COLISEO -->

            <article class="wonder">

                <div class="wonder-image">
                    <img
                        src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?auto=format&fit=crop&w=900&q=90"
                        alt="Coliseo de Roma">
                </div>

                <div class="wonder-info">
                    <small>Italia · Roma</small>
                    <h3>Coliseo</h3>
                    <p>
                        Uno de los símbolos más conocidos del antiguo Imperio Romano.
                    </p>
                </div>

            </article>


            <!-- MACHU PICCHU -->

            <article class="wonder">

                <div class="wonder-image">
                    <img
                        src="https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1200&q=90"
                        alt="Machu Picchu">
                </div>

                <div class="wonder-info">
                    <small>Perú · Andes</small>
                    <h3>Machu Picchu</h3>
                    <p>
                        Ciudad inca construida entre las montañas
                        y uno de los destinos culturales más emblemáticos de América.
                    </p>
                </div>

            </article>


            <!-- GREAT WALL -->

            <article class="wonder">

                <div class="wonder-image">
                    <img
                        src="https://images.unsplash.com/photo-1508804185872-d7badad00f7d?auto=format&fit=crop&w=900&q=90"
                        alt="Gran Muralla China">
                </div>

                <div class="wonder-info">
                    <small>China · Patrimonio</small>
                    <h3>Gran Muralla</h3>
                    <p>
                        Una extensa obra defensiva que recorre paisajes montañosos.
                    </p>
                </div>

            </article>


            <!-- CHICHÉN ITZÁ -->

            <article class="wonder">

                <div class="wonder-image">
                    <img
                        src="https://images.unsplash.com/photo-1518638150340-f706e86654de?auto=format&fit=crop&w=900&q=90"
                        alt="Chichén Itzá">
                </div>

                <div class="wonder-info">
                    <small>México · Cultura Maya</small>
                    <h3>Chichén Itzá</h3>
                    <p>
                        Uno de los complejos arqueológicos mayas
                        más importantes de México.
                    </p>
                </div>

            </article>


            <!-- CRISTO REDENTOR -->

            <article class="wonder">

                <div class="wonder-image">
                    <img
                        src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?auto=format&fit=crop&w=900&q=90"
                        alt="Río de Janeiro">
                </div>

                <div class="wonder-info">
                    <small>Brasil · Río de Janeiro</small>
                    <h3>Cristo Redentor</h3>
                    <p>
                        Uno de los símbolos más reconocidos de Brasil
                        sobre el cerro del Corcovado.
                    </p>
                </div>

            </article>

        </div>

    </section>


    <!-- EXPERIENCIAS -->

    <section class="travel-types" id="experiencias">

        <div class="travel-intro">

            <span>03 / Travel moods</span>

            <h2>
                No existe una sola
                manera de viajar.
            </h2>

            <p>
                El destino puede cambiar completamente según
                lo que buscamos: descansar, descubrir una cultura,
                explorar la naturaleza o simplemente salir de la rutina.
            </p>

        </div>


        <div class="types-list">

            <div class="type">
                <div class="type-number">01</div>
                <h3>Culture trip</h3>
                <p>
                    Historia, museos, arquitectura, gastronomía
                    y tradiciones locales.
                </p>
            </div>

            <div class="type">
                <div class="type-number">02</div>
                <h3>Nature escape</h3>
                <p>
                    Montañas, parques naturales, lagos
                    y experiencias al aire libre.
                </p>
            </div>

            <div class="type">
                <div class="type-number">03</div>
                <h3>Beach mood</h3>
                <p>
                    Mar, clima cálido, descanso
                    y destinos tropicales.
                </p>
            </div>

            <div class="type">
                <div class="type-number">04</div>
                <h3>City break</h3>
                <p>
                    Grandes ciudades, arte, restaurantes
                    y vida urbana.
                </p>
            </div>

            <div class="type">
                <div class="type-number">05</div>
                <h3>Road trip</h3>
                <p>
                    Rutas abiertas, paisajes cambiantes
                    y libertad para explorar.
                </p>
            </div>

        </div>

    </section>


    <!-- FINAL IMAGE -->

    <section class="closing">

        <div class="closing-content">

            <span>Next destination</span>

            <h2>
                Hay lugares que se visitan.
                Otros se recuerdan.
            </h2>

            <p>
                El mundo está formado por paisajes, culturas e historias
                completamente diferentes. Viajar es una forma de descubrirlas,
                entenderlas y crear experiencias propias.
            </p>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <div class="footer-main">

            <div class="footer-logo">
                Atlas.
            </div>

            <div class="footer-info">
                Travel · Culture · Destinations<br>
                Mariana Niño Solano<br>
                Backend 2026
            </div>

        </div>

        <div class="footer-line"></div>

        <div class="footer-bottom">
            <span>TRAVEL JOURNAL · VOL. 01</span>
            <span>HTML · CSS · LARAVEL</span>
        </div>

    </footer>


</body>
</html>