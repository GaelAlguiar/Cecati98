<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cecati no.125</title>
    <link rel="shortcut icon" href="imagenes/Favicon-cecati.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="Css/whats.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Css/whats2.css" rel="stylesheet">
    <link rel="stylesheet" href="./especialidades/main.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="Css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- HEADER -->

    <div id="preloader"></div>

    <div class="nav-bottom">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top"><button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">close</i>
                </button>
                <p> <img src="../Componentes/imagenes/cecati-logo.png" width="45"> Hola, ¿en que podemos ayudarte? </p>

            </div>
            <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />

                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">send</i>
                </button>

            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <div class="float">
                <i class="fa fa-whatsapp my-float"></i>
            </div>
        </button>
        <div class="circle-anime"></div>
    </div>

    <?php 
    include 'componentes/header.php';
    ?>

    <!-- SECTION BODIE -->

    <div class="wrapper">
        <div class="fondo">
            <h1>Especialidad Mantenimiento al Sistema Eléctrico Automotriz</h1>
        </div> 
        
        

        <div class="obj">
            <h1>Objetivo</h1>
        </div>
        
        <div class="objtxt">
            <h2>
                Ofrecer una red amplia y estructurada de servicios de formación para el trabajo en el campo de la Mantenimiento al Sistema Eléctrico Automotriz, para atender flexiblemente los intereses de la persona/estudiante, quien podrá estructurar rutas personales de formación para elegir uno o más trayectos formativos, diseñados con la finalidad de responder a las demandas del contexto económico, productivo, social y educativo, optimizando con ello la inserción de la persona/estudiante en dicho contexto.
            </h2>
            
                <br><hr><br>
                
                        <div class="acad" >
                            <h1>Certificación académica	</h1>
                            <hr><br>
                            <h2>
                                El diploma se obtiene cuando el estudiante acredita en su totalidad las competencias que integran los cursos de la especialidad, ya sea por formación presencial, en línea o Reconocimiento Oficial de la Competencia Ocupacional (ROCO) y de acuerdo con los lineamientos establecidos en el Manual de Procedimientos de Control Escolar.
                            </h2>
                        </div>
                    
                    <br><hr><br>
                    
                        <div class="lab" >
                                <h1>Certificación laboral	</h1>
                                <hr><br>
                                <h2>
                                    El certificado de competencia laboral se obtiene cuando el candidato acredita un estándar de competencias, a través de un proceso de evaluación con fines de certificación ante un Organismo Certificador, reconocido por el Consejo Nacional de Normalización y Certificación de Competencias Laborales (CONOCER).
                                </h2>
                            </div>
                    
                    <br><hr><br>
                    
                        <div class="enf" > 
                                <h1>Enfoque educativo	</h1>
                                <hr><br>
                                <h2>
                                    Enfoque de Competencias Integrales
                                </h2>
                            </div>
                    
                    <br><hr><br>
                    
                        <div class="esp" >
                                
                                <h1>Esta especialidad oferta cursos regulares</h1>
                                <hr><br>
                                <h2>
                                    Enfoque de Competencias Integrales
                                </h2>
                            </div>
                    
                
            
            
        </div>
        
        
    </div>
    
    <!-- FIN SECTION BODIE  -->

    <?php 
    require "footer.php";
    ?>
    
    <!--Bootstrap y Recursos Pre realizados-->
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="Js/whats.js"></script>

    <!--Javascrip realizado-->
    <script src="Js/scripts.js"></script>

    <!--Preloader-->
    <script>
        const preloader = document.querySelector("#preloader");

        window.addEventListener("load", () => {
            preloader.style.display = "none";
        })
    </script>
</body>
</html>
