<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Bino</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
    rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="header__container container">
      <div class="header__nav">
        <a class="header__logo" href="#">
          <img class="logo-picture" src="img/icons/logo.png" width="141" height="52" alt="Bino logo">
        </a>
        <nav class="nav">
          <input class="nav__input" id="nav__button" type="checkbox" />
          <label class="nav__button" for="nav__button">
            <span></span>
          </label>
          <ul class="nav__list">
            <li class="nav__item nav__item-active"><a class="nav__link">Home</a></li>
            <li class="nav__item"><a class="nav__link" href="#">About us</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Portfolio</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Pricing</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Team</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Blog</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
  
      <div class="header__intro">
        <h1 class="header__title">
          Welcome to Bino
        </h1>
        <p class="header__slogan">
          Our clients are our first priority
        </p>
        <p class="header__text">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
          make a type specimen book.
        </p>
        <div class="header__buttons">
          <a class="start-button button header__button" href="#">Get started now</a>
          <a class="learn-button header__button" href="#">Learn more</a>
        </div>
      </div>
    </div>
    <button class="slider-arrow slider-left_arrow disabled" type="button"><span class="visually-hidden">slide left button</span></button>
    <button class="slider-arrow slider-right_arrow" type="button"><span class="visually-hidden">slide right button</span></button>
  </header>

  <main>
    <section class="advantages container">
      <h2 class="visually-hidden">Our advantages</h2>
      <ul class="advantages__list">
        <li class="advantages__item design">
          <h3 class="advantages__subtitle">Sleek design</h3>
          <p class="advantages__text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum
            has been the industry.</p>
        </li>
        <li class="advantages__item code">
          <h3 class="advantages__subtitle">Clean code</h3>
          <p class="advantages__text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum
            has been the industry.</p>
        </li>
        <li class="advantages__item ideas">
          <h3 class="advantages__subtitle">Creative ideas</h3>
          <p class="advantages__text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum
            has been the industry.</p>
        </li>
        <li class="advantages__item support">
          <h3 class="advantages__subtitle">Free support</h3>
          <p class="advantages__text">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum
            has been the industry.</p>
        </li>
      </ul>
    </section>
  
    <section class="services">
      <div class="services__container container">
        <h2 class="services__title">Our services</h2>
        <ul class="services__list">
          <li class="services__item services__item-web">
            <h3 class="services__subtitle">Web design</h3>
            <p class="services__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
              Ip sum has been the industry's standard dummy text ever.</p>
          </li>
          <li class="services__item services__item-print">
            <h3 class="services__subtitle">Print design</h3>
            <p class="services__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
              Ip sum has been the industry's standard dummy text ever.</p>
          </li>
          <li class="services__item services__item-photo">
            <h3 class="services__subtitle">Photography</h3>
            <p class="services__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
              Ip sum has been the industry's standard dummy text ever.</p>
          </li>
        </ul>
      </div>
    </section>
  
    <section class="contacts">
      <h2 class="contacts__title">Keep in touch</h2>
      <p class="contacts__text">Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum
        quam nec. </p>
      <div class="contacts__container container">
        <ul class="contacts__list">
          <li class="contacts__item">
            <h3 class="contacts__subtitle">Our address</h3>
            <address class="contacts__address">House #13, Streat road, Sydney
              2310 Australia</address>
          </li>
          <li class="contacts__item">
            <h3 class="contacts__subtitle">Call us</h3>
            <ul class="contacts__phone-list">
              <li><a class="contacts__link" href="tel:+8801681091426"
                  aria-label="Phone +8801681091426">+ 880 168 109 1425</a></li>
              <li><a class="contacts__link" href="tel:+0216809142"
                  aria-label="Phone +0216809142">+ 0216809142</a></li>
            </ul>
          </li>
          <li class="contacts__item">
            <h3 class="contacts__subtitle">Email us</h3>
            <a class="contacts__link" href="mailto:contactus@email.com">contactus@email.com</a>
          </li>
        </ul>
        <form action="php/handler.php" class="contacts__form form">
          <p class="form__field-wrapper">
            <input class="form__field form__input" type="text" id="name" name="name">
            <label class="form__label" for="name">Name</label>
          </p>
          <p class="form__field-wrapper">
            <input class="form__field form__input email__input" type="email" id="email" name="email">
            <label class="form__label" for="email">Email <span class="error_message hidden">Please, enter email</span></label>
          </p>
          <p class="form__field-wrapper">
            <input class="form__field form__input" type="text" id="subject" name="subject">
            <label class="form__label" for="subject">Subject</label>
          </p>
          <p class="form__field-wrapper">
            <textarea class="form__field form__textarea" id="message" name="message"></textarea>
            <label class="form__label" for="message">Message</label>
          </p>
          <button class="contacts__button button" type="submit">Send message</button>
        </form>
      </div>
    </section>
  
    <section class="promo">
      <h2 class="visually-hidden">Trial version</h2>
      <p class="promo__offer">Let's get started now. <b>It's <span class="uppercase">free</span>!</b>
      </p>
      <p class="promo__text">30 day free trial. Free plan allows up to 2 projects. Pay if you need more. Cancel anytime.
        No catches.</p>
      <a class="button promo__button" href="#">Start free trial</a>
    </section>
  </main>

  <footer class="footer">
    <div class="footer__container container">
      <ul class="footer__social">
        <li class="footer__social-item facebook">
          <a class="social-link social-link_facebook" href="#">
            <span class="visually-hidden">facebook</span>
          </a>
        </li>
        <li class="footer__social-item twitter">
          <a class="social-link social-link_twitter" href="#">
            <span class="visually-hidden">twitter</span>
          </a>
        </li>
        <li class="footer__social-item rss">
          <a class="social-link social-link_rss" href="#">
            <span class="visually-hidden">rss</span>
          </a>
        </li>
        <li class="footer__social-item google-plus">
          <a class="social-link social-link_google-plus" href="#">
            <span class="visually-hidden">google-plus</span>
          </a>
        </li>
        <li class="footer__social-item linkedin">
          <a class="social-link social-link_linkedin" href="#">
            <span class="visually-hidden">linkedin</span>
          </a>
        </li>
        <li class="footer__social-item skype">
          <a class="social-link social-link_skype" href="#">
            <span class="visually-hidden">skype</span>
          </a>
        </li>
        <li class="footer__social-item vimeo">
          <a class="social-link social-link_vimeo" href="#">
            <span class="visually-hidden">vimeo</span>
          </a>
        </li>
        <li class="footer__social-item tumblr">
          <a class="social-link social-link_tumblr" href="#">
            <span class="visually-hidden">tumblr</span>
          </a>
        </li>
      </ul>
      <p class="footer__text">
        Kazi Erfan &copy; All rights reserved
      </p>
    </div>
  </footer>

  <a class="up-button" href="#" title="up (Alt+U or Shift+Alt+U)" accesskey="u" aria-label="scroll up"></a>

  <div class="popup hidden">
    <button class="popup__button-close" type="button"></button>
    <div class="popup__result hidden" id="popupSuccess">
      <p class="popup__title">Thank you!</p>
      <p class="popup__text">We will reply to you within 2 hours.</p>
    </div>
    <div class="popup__result hidden" id="popupError">
      <p class="popup__title">Easy, boy!</p>
      <p class="popup__text">One e-mail, one message. You don't want to get into spam, do you? ;)</p>
    </div>
  </div>

  <script src="js/script.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/ajax.js"></script>
</body>

</html>