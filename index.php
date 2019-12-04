<?php
/**
 * Template Name: xD
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<script src="https://kit.fontawesome.com/bc980c4b8f.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>



<style>

</style>
</head>
<body>

  <div  class="row firstrow ">

      <div class="col-left bg-main" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/main_section_img_1.png)"; >
        <div class="main-text-field">
          <p class="main-text">Witam Cię na stronie<br>naszej Kancelarii.</p>
          <p class="main-second-text">Pomaganie jest nasza misją, rozwiazywanie<br>problemów naszym celem.</p>
        </div>

    </div>
    <div class="col-right dark-right-main">
      <p class="right-text-dark-scroll">Scroll  <i class="fas fa-arrow-right pl-4 text-white"></i></p>
    </div>
  </div>
  <div class="row">
    <div id="scrolltarget" class="col-left2 ">
    </div>
    <div class="col-8-first">
      <div class="homepage-white">
        <div class="row">
          <div class="col-md-6 col-sm-12 px-5">
            <h1>Pomaganie jest naszą misją</h1><br>
            <p class="bigger-text2">Razem tworzymy zespół prawników z wiedzą, doświadczeniem, energią i pasją pomagania </p>
          </div>
          <div class="col-md-6 col-sm-12 px-5">
            <p class="bigger-text">Zapraszam Cię więc do skorzystania
z usług Kancelarii Adwokatów Czwakiel i Wspólnicy. </p>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-8 col-sm-12">
      <h1>Główne obszary specjalizacji naszej<br>Kancelarii <b> Adwokató Czwakiel i Wspólnicy.</b></h1>
      <p>Nazywam się Marcin Czwakiel i z wymiarem sprawiedliwości związany jestem od ponad 15 lat. Swoją przygodę zaczynałem pracując w kancelarii komorniczej. Od 2013 roku jestem adwokatem, a aktualnie wspólnikiem zarządzającym Kancelarii Adwokatów Czwakiel i Wspólnicy. Umiejętność pracy pod presją czasu, koncentracja</p>
      </div>
      <div class="col-md-3 col-sm-0">
      </div>
      </div>
      <div class="row">
        <div class="col-md-5 col-sm-12 container-green text-white px-auto mx-auto">
          <h2 class="text-white">Dla Firm</h2></br>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Obsługa prawna przedsiębiorców > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Obsługa prawna firm > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Obsługa prawna spółek > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Obsługa prawna pracodawców > </a></p>
        </div>
        <div class="col-right">
        </div>
        <div class="col-md-5 col-sm-12 px-auto mx-auto container-two">
          <h2>Dla Ciebie</h2></br>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Spadki > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Rozwody i podziały majątku > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Alimenty i kontakty z dzieckiem > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Sprawy karne > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Prawo pracy > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Windykacja > </a></p>
          <p class="animatedlink2"><a href="https://www.w3schools.com">Inne > </a></p>
        </div>
      </div>
    </div>
    <div class="col-right">
    </div>
    <div class="col-right dark-right">
      <p class="right-text-dark">O nas</p>
    </div>
  </div>
  <div class="row">
    <div class="col-left2">

    </div>
    <div class="col-8-first ">
      <h1>Korzystając z naszych usług możesz liczyć na</h1>
      <div class="row">

        <div id="phone-team" class="col-sm-6 col-md-3 pr-5 ">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png"/>
          <h4 class="py-3">Wieloletnie doświadczenie</h4>
          <p class="pr-5">W zakresie zleconej obsługi prowadzę przed sadami procesy gospodarcze</p>
        </div>
        <div id="phone-team2" class="col-sm-6 col-md-3 pr-5 ">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png"/>
          <h4 class="py-3">Wieloletnie doświadczenie</h4>
          <p class="pr-5">W zakresie zleconej obsługi prowadzę przed sadami procesy gospodarcze</p>
        </div>
        <div id="phone-team3" class="col-sm-6 col-md-3 pr-5 ">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png"/>
          <h4 class="py-3">Wieloletnie doświadczenie</h4>
          <p class="pr-5">W zakresie zleconej obsługi prowadzę przed sadami procesy gospodarcze</p>
        </div>
        <div id="phone-team4" class="col-sm-6 col-md-3 pr-5 ">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png"/>
          <h4 class="py-3">Wieloletnie doświadczenie</h4>
          <p class="pr-5">W zakresie zleconej obsługi prowadzę przed sadami procesy gospodarcze</p>
        </div>
      </div>
    </div>
    <div class="col-right">
    </div>
    <div class="col-right dark-right">
      <p class="right-text-dark">Nasze Przewagi</p>
    </div>
  </div>
  <div class="row">
    <div class="col-left2">
    </div>
    <div class="col-8-first">
      <h1>Najnowsze<b> aktualności</b></h1>
      <div class="row mx-auto">
        <div uk-slider="center: true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-3@s uk-grid">
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png" alt="">
                    </div>
                    <div class="uk-card-body">
                      <h3 class="uk-card-title"><b>1 PAŹDZIERNIK 2019</b></h3>
                      <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png" alt="">
                    </div>
                    <div class="uk-card-body">
                      <h3 class="uk-card-title"<b>1 PAŹDZIERNIK 2019</b></h3>
                      <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png" alt="">
                    </div>
                    <div class="uk-card-body">
                      <h3 class="uk-card-title"><b>1 PAŹDZIERNIK 2019</b></h3>
                      <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png" alt="">
                    </div>
                    <div class="uk-card-body">
                      <h3 class="uk-card-title"><b>1 PAŹDZIERNIK 2019</b></h3>
                      <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png" alt="">
                    </div>
                    <div class="uk-card-body">
                      <h3 class="uk-card-title"><b>1 PAŹDZIERNIK 2019</b></h3>
                      <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png" alt="">
                    </div>
                    <div class="uk-card-body">
                      <h3 class="uk-card-title"><b>1 PAŹDZIERNIK 2019</b></h3>
                      <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left-out " href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right-out" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
        <!-- <div class="col-4">
          <img class="img-fluid w-100 mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png"/>
          <p><b>1 PAŹDZIERNIK 2019</b></p>
          <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
        </div>
        <div class="col-4">
          <img class="img-fluid w-100 mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png"/>
          <p><b>1 PAŹDZIERNIK 2019</b></p>
          <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
        </div>
        <div class="col-4">
          <img class="img-fluid w-100 mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_1.png"/>
          <p><b>1 PAŹDZIERNIK 2019</b></p>
          <p class="bigger-text ">Po godzinach nie tylko<br> o prawie</p>
        </div> -->
      </div>
    </div>
    <div class="col-right">
    </div>
    <div class="col-right dark-right">
      <p class="right-text-dark">Blog</p>
    </div>
  </div>
  <div class="row">
    <div class="col-left2">
    </div>
    <div class="col-9-first container-dark my-auto">
      <div class="mx-auto my-auto">


          <div class="row">
            <div class="col-3">
            </div>
              <div class="col-7">
                <img id="moved-left-img" class="moved-left-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_3.png"/>
                <h1 class="text-white">Misja: niemożliwe nie istnieje</br>
                  Kancelariia Adwokatów Czwakiel
                </h1>
                <div class="row">
                <div class="col-md-6 col-sm-12">
                  <p class="text-white">
                    Tekst SEO. Nazywam się Marcin Czwakiel i z wymiarem sprawiedliwości związany jestem od ponad 15 lat. Swoją przygodę zaczynałem pracując w kancelarii komorniczej.
                  </br>
                  </br>
                    Od 2013 roku jestem adwokatem, a aktualnie wspólnikiem zarządzającym Kancelarii Adwokatów

                  </p><br>
                  <button class="button-on-dark animatedlink" onclick="window.location.href='/page2'">Więcej</button>
                </div>
                <div class="col-md-6 col-sm-12">
                  <p class="text-white">
                    Umiejętność pracy pod presją czasu, koncentracja i opanowanie w trudnych sytuacjach to moje największe atuty. Lubię wygrywać i zawsze robię wszystko by osiągać zakładany cel.
                  </br>
                  </br>
                    Bardzo dużo radości sprawia mi końcowy uścisk dłoni Klienta połączony z podziękowaniem za wygranie sprawy. Chwile wolne od pracy uwielbiam spędzać z moją żoną i synkiem na różnych zabawach lub spacerach.
                  </br>
                  </br>
                    Ponadto jestem zapalonym biegaczem i lubię czytać książki tak popularnonaukowe jak i fantastykę.
                    Umiejętność pracy pod presją czasu, koncentracja i opanowanie w trudnych sytuacjach to moje największe atuty. Lubię wygrywać i zawsze robię wszystko by osiągać
                    Ponadto jestem zapalonym biegaczem i lubię czytać książki tak popularnonaukowe jak i fantastykę.
                  </p>
                </div>
                </div>
              </div>

          </div>
        <div>
      </div>
    </div>
    </div>
    <div class="col-right dark-right">
      <p class="right-text-dark">SEO</p>
    </div>
  </div>
  <div class="row">
    <div class="col-left2">
    </div>
    <div class="col-8-first">
      <h1>
        Prawo mamy pod kontrolą.<br>
        Pomaganie jest naszą misją, rozwiązywanie<br>
         problemów naszym celem.
      </h1>
      <div class="row">
      <div class="col-md-6 col-sm-12 py-2 text-left">
        <p>
          Bardzo dużo radości sprawia mi końcowy uścisk dłoni Klienta połączony z podziękowaniem za wygranie sprawy.
        </p><br>
        <button class="button-on-white animatedlink" onclick="window.location.href='/page2'">Więcej</button>

      </div>
      <div class="col-md-6 col-sm-12 py-2 text-left">
        <p>
          Nazywam się Marcin Czwakiel i z wymiarem sprawiedliwości związany jestem od ponad 15 lat. Swoją przygodę zaczynałem pracując w kancelarii komorniczej.
          <br><br>
          Od 2013 roku jestem adwokatem, a aktualnie wspólnikiem zarządzającym Kancelarii Adwokatów Czwakiel.</p>
      </div>
    </div>
      <div class="row ">
        <div id="#phone-team"  class="col-sm-12 col-md-4 ">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_2.png"/>
          <div class="pt-4 px-3">
            <h3>Marcin Czwakiel</h3>
            <p class="py-2"><b>ADWOKAT</b></p>
            <p>Swoją przygodę zaczynałem pracując w kancelarii komorniczej. Od 2013 roku jestem adwokatem, a aktualnie wspólnikiem zarządzającym Kancelarii Adwokatów Czwakiel i Wspólnicy.</p>
          </div>
        </div>
        <div id="#phone-team" class="col-sm-12 col-md-4 ">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_2.png"/>
          <div class="pt-4 px-3">
            <h3>Marcin Czwakiel</h3>
            <p class="py-2"><b>ADWOKAT</b></p>
            <p>Swoją przygodę zaczynałem pracując w kancelarii komorniczej. Od 2013 roku jestem adwokatem, a aktualnie wspólnikiem zarządzającym Kancelarii Adwokatów Czwakiel i Wspólnicy.</p>
          </div>
        </div>
        <div id="#phone-team" class="col-sm-12 col-md-4 ">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/main_img_2.png"/>
          <div class="pt-4 px-3">
            <h3>Marcin Czwakiel</h3>
            <p class="py-2"><b>ADWOKAT</b></p>
            <p>Swoją przygodę zaczynałem pracując w kancelarii komorniczej. Od 2013 roku jestem adwokatem, a aktualnie wspólnikiem zarządzającym Kancelarii Adwokatów Czwakiel i Wspólnicy.</p>
          </div>
        </div>

      </div>
    </div>
    <div class="col-right">
    </div>
    <div class="col-right dark-right">
      <p class="right-text-dark">Zespół</p>
    </div>
  </div>
  <div class="row">
    <div class="col-left2">
    </div>
    <div class="col-8-first container-green text-white contact-container">
      <div class="col-sm-12 col-md-4 text-left">
        <h1 class="text-white">Skontaktuj<br> się z nami</h1>
      </div>
      <div class="col-sm-12 col-md-4 text-left">
        <h1 class="text-white">+ 604 604 604</h1>
        <p class="text-white pb-5">Marcin Czwakiel</p>
        <h1 class="text-white">+ 604 604 604</h1>
        <p class="text-white pb-5">Marcin Czwakiel</p>
        <h1 class="text-white">+ 604 604 604</h1>
        <p class="text-white pb-5">Marcin Czwakiel</p>
        <h3 class="text-white" style="">kontakt@adwokat-czwakiel.pl</h3>
      </div>
      <div class="col-sm-12 col-md-3 text-left">
        <div  class="pb-5">
          <p class="text-white contact-mini-text">Kancelaria Adwokatów<br> Czwakiel i Wspólnicy</p>
        </div>
        <div  class="pt-4 pb-3">
          <p class="text-white contact-mini-text">58-300 Wałbrzych,<br>
Pl. Magistracki 8/2</p>
        </div>
        <div  class="pt-3 pb-4">
          <p class="text-white contact-mini-text">50-208 Wrocław,<br> ul. Dubois 7/4</p>
        </div>
        <div class="pt-4">
          <p class="text-white contact-mini-text">Kancelaria czynna jest od<br> poniedziałku do piątku w<br> godzinach 8:00 – 15:00 </p>
          <p class="text-white contact-mini-text-small ">Możliwe jest indywidualne ustalenie czasu i miejsca spotkania po</span>
        </div>
      </div>
    </div>
    <div class="col-right">
    </div>
    <div class="col-right dark-right">
      <p class="right-text-dark">Kontakt</p>
    </div>
  </div>

  </div>

</body>


			<!-- Do the right sidebar check -->





<?php get_footer(); ?>
