<?php
session_start();
if (!$_SESSION['ok'] == 1) {
    header("location:../");
}
$whatsapp = "";
$claveclass = "";
$linkclass = "";
$recursos = "";
$pruebadiagnostica = "";

if ($_SESSION['curso'] == "group1") {

    $whatsapp = "https://chat.whatsapp.com/HAsHfxxBN988nvPdBPhXGR";
    $claveclass = "rx7bxvc";
    $linkclass = "https://classroom.google.com/c/NTExMTI4MDk4MzU0?cjc=rx7bxvc";
    $recursos = "https://1drv.ms/u/s!Ap-CFv98u9wjggzg6xBftRkvR3V7?e=yfepJ0";
    $pruebadiagnostica = "https://forms.office.com/r/BrB9hFQ65E";
} else if ($_SESSION['curso'] == "group2") {

    $whatsapp = "https://chat.whatsapp.com/Dc9wyTnPnDs9ICpdgGe3CM";
    $claveclass = "wg6n53d";
    $linkclass = "https://classroom.google.com/c/NDg5MzE4MTM0Mjk3?cjc=wg6n53d";
    $recursos = "https://1drv.ms/u/s!Ap-CFv98u9wjgyI9MXFxjzBqfruV?e=r4dYNU";
    $pruebadiagnostica = "https://forms.office.com/r/DT8ZUwRHBP";
    # code...

} else {
}

?>


<!DOCTYPE html>
<html lang="es" oncontextmenu="return false">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="96x96">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


    <title>Fundamentos de Programación Web - 👨‍💻</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/nicepage.css">
    <script>
        onkeydown = e => {
            let tecla = e.which || e.keyCode;

            // Evaluar si se ha presionado la tecla Ctrl:
            if (e.ctrlKey) {
                // Evitar el comportamiento por defecto del nevagador:
                e.preventDefault();
                e.stopPropagation();

                // Mostrar el resultado de la combinación de las teclas:
                if (tecla === 85)
                    alert("Ha presionado las teclas Ctrl + U\n ¡Por favor!\n Intenta otra opción");

                if (tecla === 83)
                    alert("Ha presionado las teclas Ctrl + S \n ¡Por favor!\n Intenta otra opción");
            }
        }
    </script>
</head>

<body>

    <div class="nav-bottom">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top">
                <button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">close</i>
                </button>

                <p>
                    <img src="images/pic.jpg" width="50" style="border-radius: 50px;" /> Hola, Soy Darwin ¿en que puedo
                    ayudarle?
                </p>
            </div>
            <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" placeholder="Enviar mensaje..." />

                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">send</i>
                </button>
            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <div class="float">
                <i class="fab fa-whatsapp my-float"></i>
            </div>
        </button>
        <div class="circle-anime"></div>
    </div>

    <div class="container-img">
        <img src="./images/logofepade.png" alt="" class="img-fepade">
        <img src="./images/Imagen1.png" class="img-oim" alt="">
        <img src="./images/usaid.png" class="img-usaid" alt="">
        <img src="./images/MEGATEC.png" class="img-megatec" alt="">
    </div>

    <div class="container">
        <div class="mensaje">

        </div>
        <div class="profile">
            <img src="images/pic.jpg" alt="" />
            <h3>Darwin Flores</h3>
            <p>Tec. En Ingeniería de Sistemas Informáticos</p>
            <p>alfonso.darwinflores@gmail.com</p>

            <div class="buttons">
                <a href="<?php echo $whatsapp ?>" target="_blank" class="btn">Unirse al Grupo
                    <span class="fab fa-whatsapp"></span> </a>
                <a href="../seleccionar.php?search=destroy" class="btn" style="background-color: #000 !important;">Select Group
                    <span class="fab fa-whatsapp"></span> </a>
            </div>
        </div>

        <div class="information">
            <div class="services">
                <h1>
                    <?php
                    if ($_SESSION['curso']=="group1") {
                      echo "Grupo #1 - [ May/2022 - Sept/2022]";
                    } else {
                        echo "Grupo #2 - [ Sept/2022 - Enero/2023]";
                    }
                    
                    ?>
                </h1>
                <h3 class="title">MÓDULOS:</h3>
                <div class="box-container">
                    <div class="box">
                        <img src="images/logica.png" alt="LÓGICA DE PROGRAMACIÓN" />
                        <h3>LÓGICA DE PROGRAMACIÓN</h3>
                    </div>
                    <div class="box">
                        <img src="images/icon-1.png" alt="HTML" />
                        <h3>HTML</h3>
                    </div>
                    <div class="box">
                        <img src="images/icon-2.png" alt="CSS" />
                        <h3>CSS</h3>
                    </div>
                    <div class="box">
                        <img src="./images/icon-1.jpg" alt="PHP Y LARAVEL" />
                        <h3>PHP</h3>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="u-expanded-width u-table u-table-responsive u-table-1">
                    <table class="u-table-entity u-table-entity-1">

                        <thead class="u-align-center u-table-header u-table-header-1">
                            <tr>
                                <th colspan="2" class="u-border-1 u-border-palette-5-light-1 u-table-cell u-text-grey-50 u-table-cell-4">
                                    <b>DIPLOMADO:</b> FUNDAMENTOS DE PROGRAMACIÓN WEB
                                </th>
                            </tr>
                        </thead>
                        <tbody class="u-align-center u-table-body">
                            <tr>
                                <td width="35%" class="u-border-1 u-border-grey-25 u-palette-3-base u-table-cell u-table-cell-8">
                                    MÓDULOS</td>

                                <td class="u-border-1 u-border-grey-25 u-palette-3-base u-table-cell u-table-cell-8">
                                    RECURSOS</td>

                            </tr>
                            <tr>
                                <td rowspan="2" class="u-align-left u-border-1 u-border-grey-25 u-first-column u-table-cell">Lógica
                                    de Programación</td>
                                <td class="u-border-1 u-border-grey-25 u-table-cell"> <b>Prueba Diagnóstica:</b>
                                    <br><a target="_blank" href="<?php echo $pruebadiagnostica ?>"><span class="fas fa-book"></span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="u-border-1 u-border-grey-25 u-table-cell"><b>Recursos Compartidos:</b><br><a target="_blank" href="<?php echo $recursos; ?>"><span class="fas fa-folder"></span></a> </td>
                            </tr>


                            <tr>
                                <td class="u-align-left u-border-1 u-border-grey-25 u-first-column u-table-cell">HTML
                                </td>
                                <td class="u-border-1 u-border-grey-25 u-table-cell"><b>Recursos Compartidos:</b><br><a target="_blank" href="<?php echo $recursos; ?>"><span class="fas fa-folder"></span></a> </td>
                            </tr>
                            <tr>
                                <td class="u-align-left u-border-1 u-border-grey-25 u-first-column u-table-cell">CSS
                                </td>
                                <td class="u-border-1 u-border-grey-25 u-table-cell"><b>Recursos Compartidos:</b><br><a target="_blank" href="<?php echo $recursos; ?>"><span class="fas fa-folder"></span></a> </td>
                            </tr>
                            <tr>
                                <td class="u-align-left u-border-1 u-border-grey-25 u-first-column u-table-cell">PHP Y
                                    LARAVEL</td>
                                <td class="u-border-1 u-border-grey-25 u-table-cell"><b>Recursos Compartidos:</b><br><a target="_blank" href="<?php echo $recursos; ?>"><span class="fas fa-folder"></span></a> </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="contact">
                <h3 class="title">CONTACTAME</h3>
                <div class="box-container">
                    <div class="box">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <h3>Correo Electrónico</h3>
                            <p>alfonso.darwinflores@gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-phone"></i>
                        <div class="info">
                            <h3>Número de Celular</h3>
                            <p>+5037863-3023</p>

                        </div>
                    </div>
                    <div class="box">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="info">
                            <h3>AULA VIRTUAL</h3>
                            <p>Clave: <?php echo $claveclass ?></p>
                            <p><a href="<?php echo $linkclass ?>" target="_blank">Unirse Mediante el Link <span class="fab fa-classroom"></span> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>

</body>

</html>