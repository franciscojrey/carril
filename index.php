<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Miguel J. Carril</title>
    <!-- LOGO -->
    <link rel="shortcut icon" type="image/x-icon" href="static/img/icon.png">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <!-- BOX ICONS (TOGGLE MENU) -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS STYLES -->
    <link rel="stylesheet" href="static/css/fonts.css">
    <link rel="stylesheet" href="static/css/header.css"/>
    <link rel="stylesheet" href="static/css/styles.css"/>
    <link rel="stylesheet" href="static/css/fixed.css">
    <link rel="stylesheet" href="static/css/footer.css">
  </head>
  <body>
    <header class="header">
        <a href="" class="nav__perfil">
            <div class="nav__img">
                <img src="static/img/logo.png" alt="">
            </div>
        </a>
        <i class='bx bx-menu header__toggle' id="header-toggle"></i>
        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link">Inicio</a></li>
                    <li class="nav__item"><a href="#products" class="nav__link">Productos</a></li>
                    <li class="nav__item"><a href="#about-us" class="nav__link">Nosotros</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <span class="anchor" id="home"></span>
    <section class="home-container">
        <div class="home" id="home">
            <div class="home__body">
                <h1 class="section-title mb-7 uppercase">Trayectoria y experiencia al servicio del inversor</h1>
                <!--
                <h4 class="home__description mb-7">Desarrollo de portfolios para administrar su patrimonio de manera eficiente.</h2>
                -->
            </div>
        </div>
    </section>

    <section class="features-container" id="features">
        <!--
        <h2 class="features__title">¿Por qué elegirnos?</h2>
        <div class="line"></div>
        -->
        <div class="features">
            <div class="feature__box feature__box1">
              <i class="far fa-user-circle features__icon"></i>
              <h4>Asesoramiento personalizado</h4>
              <p class="feature__box-description">
                Acompañamos a nuestros clientes con un trato personalizado según sus necesidades e intereses.
              </p>
            </div>
            <div class="feature__box feature__box2">
              <i class="fas fa-chart-pie features__icon"></i>
              <h4>Cartera de inversión a medida</h4>
              <p class="feature__box-description">Diseñamos las soluciones financieras más eficientes para las metas de cada cliente.</p>
            </div>
            <div class="feature__box feature__box3">
              <i class="fas fa-hand-holding-usd features__icon"></i>
              <h4>Variedad de opciones de inversión</h4>
              <p class="feature__box-description">Contamos con una gran variedad de estrategias de inversión pensadas para el perfil de cada inversor.</p>
            </div>
        </div>
    </section>

    <span class="anchor" id="products"></span>
    <section class="products-container">
        <h2 class="products__title">Nuestros productos</h2>
        <div class="line"></div>
        <div class="products">
            <div class="product__box product__box1">
                <i class="fas fa-chart-line"></i>
                <h4>Acciones</h4>
            </div>
            <div class="product__box product__box2">
                <i class="fas fa-file-invoice-dollar"></i>
                <h4>Bonos</h4>
            </div>
            <div class="product__box product__box3">
                <i class="fas fa-globe"></i>
                <h4>CEDEARS</h4>
            </div>
            <div class="product__box product__box4">
                <i class="far fa-calendar-alt"></i>
                <h4>Cauciones</h4>
            </div>
            <div class="product__box product__box5">
                <i class="fas fa-money-bill"></i>
                <h4>Opciones</h4>
            </div>
            <div class="product__box product__box6">
                <i class="fas fa-user-shield"></i>
                <h4>Obligaciones Negociables</h4>
            </div>
        </div>
    </section>

    <span class="anchor" id="about-us"></span>
    <section class="about-us__container">
        <div class="about-us">
            <div class="about-us__box">
                <div class="about-us__container">
                    <h3 class="about-us__title">Nosotros</h3>
                    <div class="line-about-us"></div>
                    <h4 class="about-us__description">Miguel J Carril es socio de la Bolsa de Comercio de Buenos Aires desde el 12 de agosto 1976.
                        <br>
                        Fue Agente de Bolsa desde el 23 de noviembre de 1977. Su especialización el asesoramiento personalizado para sus clientes.
                        <br>
                        El 30 de marzo de 1995 fue condecorado por el entonces Presidente de la Bolsa de Comercio de Buenos Aires institución por su cooperación diligente.
                        <br>
                        Fue tesorero de la Bolsa de Comercio de Buenos Aires en el periodo.
                        <br>
                        Fue Director del Banco de Valores S.A.
                        <br>
                        Fue director de Caja de Valores S.A.
                        <br>
                        Se convirtió en ALYC por normativa en el año 2013.
                    </h4>
                </div>
            </div>
        </div>
    </section>
    
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0187538390137!2d-58.37317028477021!3d-34.60368728045952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33532baa5f589%3A0x6dc89b159c66204b!2s25%20de%20Mayo%20347%2C%20C1002ABG%20CABA!5e0!3m2!1sen!2sar!4v1614953728170!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

    <span class="anchor" id="contact"></span>
    <footer>
        <div class="contact">
            <span class="anchor" id="form-span"></span>
            <div class="contact__box">
                <div class="contact__form">
                    <form action="send_mail.php" method="post" class="form">
                        <div class="form__header">
                            <h3 class="form__title uppercase">Consultas</h3>
                            <div class="line-contact"></div>
                        </div>
                        
                        <div class="form-item">
                            <input type="text" class="form-input" name="name" placeholder="Nombre" aria-label="nombre" required minlength="2">
                        </div>

                        <div class="form-item">
                            <input type="number" class="form-input" name="telefono" placeholder="Teléfono (opcional)" aria-label="telefono" minlength="6">
                        </div>

                        <div class="form-item">
                            <input type="text" class="form-input" name="email" placeholder="Email" aria-label="email" required minlength="4">
                        </div>
                        
                        <div class="form-item">
                            <textarea class="form-input" name="message" placeholder="Mensaje" aria-label="mensaje" required minlength="4"></textarea>
                        </div>
                        
                        <div class="form__item">
                            <input type="hidden" class="form__input" id="form_name" name="subject" value="Enviado desde www.rmackintosh.com.ar" aria-label="subject" required minlength="2">
                        </div>
                        
                        <button class="form-button uppercase g-recaptcha" type="submit" name="submit" id="submit">Enviar</button>
                    </form>    
                </div>
                <div class="contact__container">
                    <div class="contact__box-info">
                        <div class="contact__info-box">
                            <h3 class="contact__title uppercase">Contacto</h3>
                            <div class="line-contact"></div>
                            <h4 class="contact__description">25 de Mayo 347, Piso 6to Oficina 613, CABA</h4>
                            <h4 class="contact__description">mcarril@migueljcarrilsa.com.ar</h4>
                            <h4 class="contact__description">4311-4505</h4>
                            <h4 class="contact__description">4312-8328</h4>
                            <h4 class="contact__description">4313-7790</h4>
                            <h4 class="contact__description">4313-8641</h4>
                            <h4 class="contact__description">11-4986-3891</h4>
                            <h4 class="contact__description">11-4986-3895</h4>
                            <h3 class="contact__title uppercase">Legales</h3>
                            <h4 class="contact__description"><a target="_blank" href="static/pdf/aranceles.pdf">Aranceles</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  <!-- JAVASCRIPT -->
  <script src="static/js/menu.js"></script>
  <!-- IONICONS -->
  <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
  </body>
</html>
