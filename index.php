<?php
session_start();

if (isset($_SESSION['ok'])) {
  header("location: ./fdpweb/");
}


?>


<!DOCTYPE html>

<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/group2.png" type="image/x-png">
  <title>¡Welcome! 👨‍💻</title>

</head>

<body class="u-body u-xl-mode" cz-shortcut-listen="true">


  <main>
    <section class="u-clearfix u-image u-section-2" id="carousel_971c" data-image-width="2000" data-image-height="1300">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-image u-image-circle u-preserve-proportions u-image-1 animated customAnimationIn-played" data-image-width="720" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="2000" style="will-change: transform, opacity; animation-duration: 2000ms;"></div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xs u-container-layout-2">
                  <h2 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-default u-text-1">Programación Web</h2>
                  <p class="u-text u-text-body-alt-color u-text-2"> Mi nombre, Darwin Alfonso Flores Colindres.</p>
                  <h2 class=" u-text u-text-body-alt-color u-text-default u-text-1">
                    ¿Qué aprenderás?
                  </h2>

                  <a href="#" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-4 u-palette-4-base u-radius-50 u-text-body-alt-color u-btn-1" style="cursor: text;">Selecciona un grupo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-3" id="carousel_e1fd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <a href="seleccionar.php?search=group1">
              <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                  <span class="u-custom-item u-file-icon u-icon u-icon-rectangle u-icon-3"><img src="assets/group1.png" alt=""></span>
                  <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"> Group #1</h4>
                  <p class="u-custom-item u-text u-text-grey-40 u-text-2">Fundamentos de Programación Web</p>
                  <ol class="list">
                    <li>Lógica de Programación</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP y Laravel</li>
                  </ol>
                </div>
              </div>
            </a>
            <a href="seleccionar.php?search=group2">
              <div class="u-align-center u-container-style u-custom-border u-custom-item u-list-item u-palette-3-base u-repeater-item u-shape-rectangle u-list-item-2 animated customAnimationIn-played" data-animation-name="customAnimationIn" data-animation-duration="2000" style="will-change: transform, opacity; animation-duration: 2000ms;">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                  <span class="u-custom-item u-file-icon u-icon u-icon-rectangle u-palette-3-base u-icon-3"><img src="assets/group2.png" alt=""></span>
                  <h4 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3"> Group #2</h4>
                  <p class="u-custom-item u-text u-text-4">Fundamentos de Programación Web.
                  </p>

                  <ol class="list">
                    <li>Lógica de Programación</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP y Laravel</li>
                  </ol>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div id="mensaje">
  </div>
  <footer>

    <img src="./fdpweb/images/logofepade.png" alt="" class="img-fepade">
    <img src="./fdpweb/images/Imagen1.png" class="img-oim" alt="">
    <img src="./fdpweb/images/usaid.png" class="img-usaid" alt="">
    <img src="./fdpweb/images/MEGATEC.png" class="img-megatec" alt="">

  </footer>

  <script src="./fdpweb/js/validar.js"></script>

</body>

</html>