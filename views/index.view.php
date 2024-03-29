<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/fdd2e8457c.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="css/mainStyles.css">
    <title>Websmiths</title>
</head>
<body>
    
     <!-- Parte inicial de contacto -->

     <div class="contacto_rapido">
        <p>Tel. 55 45 32 45 79  |  email: websmiths123@gmail.com</p>
        <a href="#"> <div class="whats-nav"><i class="fab fa-whatsapp"></i></div></a>
        <a href="#"> <div class="face-nav"><i class="fab fa-facebook"></i></div> </a>
        <a href="#"> <div class="insta-nav"><i class="fab fa-instagram"></i></div> </a>
    </div>

    <!-- responsive menu -->
    <div class="menu-resposive" id="menu-responsive">
            <ul>
                <li><a href="#" id="btn-inicio-alterado">Inicio</a></li>
                <li><a href="#" id="btn-sobre-mi-alterado">Sobre mi</a></li>
                <li><a href="#" id="btn-servicios-alterado">Servicios</a></li>
                <li><a href="#" id="btn-horarios-alterado">Horarios</a></li>
                <li><a href="#" id="btn-ubicacion-alterado">Ubicación</a></li>
                <li><a href="#" id="btn-contacto-alterado">Contacto</a></li>
            </ul>
    </div>
    <!-- header -->
    <nav id="nav">
    <input type="checkbox" id="check" >
			<label for="check" class="check_btn">
				<i class="fas fa-bars"></i>
			</label>
        <div class="izq">
            <div class="logo">
                <div class="img-logo">
                </div>
            </div>
        </div>
        <div class="der">
            <ul>
                <li><a href="#" id="btn-inicio">Inicio</a></li>
                <li><a href="#" id="btn-sobre-mi">Nosotros</a></li>
                <li><a href="#" id="btn-servicios">Servicios</a></li>
                <li><a href="#" id="btn-ubicacion">¿Website?</a></li>
                <li><a href="#" id="btn-horarios">Contacto</a></li>
                
            </ul>
        </div>
        
    </nav>


    <!-- Inicio -->

    <section class="home">
        <div class="row">
            <div class="col-1">
                <img src="img/undraw_web_developer_p3e5.png" alt="dev">
            </div>

            <div class="col-2">
                <h2>TU VISIÓN HECHA REALIDAD</h2>
                
                <h4><i>En Websmiths creamos páginas web innovadoras para tu negocio</i></h4>

                
                <a href="#" class="btn-primario"><div class="primary"> Saber Más </div></a>

            </div>
        </div>
    </section>




    

    <section class="aboutUs">

        <div class="contenedor__aboutUs">
            <div class="izquierda">

            </div>
            <div class="derecha">
                <h3>Acerca de nosostros</h3>
                <p>
                Somos una empresa que está comprometida al desarrollo de software de calidad y profesional, decidida a ayudar a aquellas personas que quieran adentrarse en este mundo lleno de oportunidades a traves del diseño Web.   ¡ Te invitamos a descubrir las ventajas de mostrar tu marca al mundo entero !
                </p>
                <div class="att">
                <p>Atte: El equipo de desarrolladores de Websmiths.</p>
                </div>

                <div class="btn_aboutUs_down">
              
                    <a href="#">
                        <div class="btn__aboutUs">
                        <i class="fas fa-chevron-down"></i>
                        </div>
                    </a>
 
                </div>
            </div>
        
        </div>
        
        
    </section>

    <!-- compromisos --> 
    <section class="compromisos">
    <div class="hechos" loading="lazy">

				<div class="box">
					<div class="contenido_hechos"><i class="far fa-clock"></i><p>Entregamos a tiempo</p></div>
					<div class="contenido_hechos"><i class="far fa-star"></i><p>Diseños innovadores</p></div>
					<div class="contenido_hechos"><i class="fas fa-user-alt"></i><p>Páginas personalizables</p></div>
					<!-- <div class="contenido_hechos"><i class="fab fa-envira">Lorem ipsum</i><p></p></div> -->
				</div>
				
			</div>
    </section>


    <!-- "Muestra tu marca" section -->

    <section class="muestra">
        <div class="container__muestra">
            <div class="text__muestra">
                <h2>Muéstrale a todo el mundo tu marca a tu manera </h2>
                <p>El diseño web realizado por <strong>Websmiths</strong> es completamente a la medida y enfocado a las necesidades del cliente. Todos nuestros diseños son personalizados, sin uso de alguna plantilla. </p>
            </div>
            <div class="img__muestra">

            </div>
        </div>
        <div class="btn__muestra">
            <a href="#">
                <div class="btn_muestra_real">
                <i class="fas fa-chevron-down"></i>
                </div>
            </a>
        </div>
    </section>


     <!-- Seccion de paquetes -->

    <section class="paquetes">
        <div class="wave__up">
        </div>
        
        <div class="titulos">
            <h2>Conoce nuestros paquetes</h2>
            <hr>
            <p>Conoce algunas de las opciones para construir tu sitio web o contactanos para pedir tu cotización</p>
        </div>
        <div class="tarjetas__parte__arriba">


            <div class="tarjeta">
                <div class="arriba">
                    <div class="img__contenedor__menuDigital">
                        <div class="img__menuDigital"></div>
                    </div>
                    <div class="titulo__subtitulo">
                        <h2>Menu Digital</h2>
                        <p>
                        Haz que el menú de tu negocio tenga un formato digital y pueda ser escaneado a traves de un código QR.
                        </p>
                    </div>
                </div>

                <hr>

                <div class="abajo">
                    <ul>
                        <li>Opción de subir al sitio web hasta 100 imágenes.</li>
                        <li>Oportunidad de realizar hasta 2 cambios por mes (no acomulables).</li>
                        <li>Garantía de 2 años.</li>
                        <li>Propiedad del código fuente.</li>
                        <li>Diseño web a la medida.</li>
                        <li>Diseño web responsivo.</li>
                        <li>Hosting (1 año).</li>
                        <li>Dominio (1 año).</li>
                    </ul>
                    
                    <strong>Desde: $1,600 MXN</strong>

                    <a href="pdf/Paquetes-Websmiths1.pdf" target="_blank"> <div class="btn__menu"><p>Ver</p></div> </a>
                </div>

            </div>


            <!-- segunda tarjeta de la parte de arriba -->

            <div class="tarjeta">
            <div class="arriba">
                    <div class="img__contenedor__webPersonal">
                        <div class="img__webPersonal"></div>
                    </div>
                    <div class="titulo__subtitulo">
                        <h2>Web Personal</h2>
                        <p>
                        Ideal para mostrar al mundo tus proyectos, experiencia laboral, servicios y medios de contacto. 
                        </p>
                    </div>
                </div>

                <hr>

                <div class="abajo">
                    <ul>
                        <li>Opción de subir al sitio web hasta 50 imágenes.</li>
                        <li>Oportunidad de realizar hasta 2 cambios por mes (no acomulables).</li>
                        <li>Garantía de 2 años.</li>
                        <li>Propiedad del código fuente.</li>
                        <li>Diseño web a la medida.</li>
                        <li>Diseño web responsivo.</li>
                        <li>Pie de página / footer.</li>
                        <li>Hosting (1 año).</li>
                        <li>Dominio (1 año).</li>
                    </ul>
                    
                    <strong>Desde: $1,800 MXN</strong>

                    <a href="pdf/Paquetes-Websmiths2.pdf" target="_blank"> <div class="btn__webPersonal"><p>Ver</p></div> </a>
                </div>
            </div>


        </div>
        

        <div class="tarjetas__parte__abajo">



            <div class="tarjeta">
                <div class="arriba">
                    <div class="img__contenedor__webBasico">
                        <div class="img__webBasico"></div>
                    </div>
                    <div class="titulo__subtitulo">
                        <h2>Web Básico</h2>
                        <p>
                         Ideal para emprendedores y negocios pequeños/medianos. Da a conocer a tus futuros clientes sobre tus servicios o productos con estilo y presentación. 
                        </p>
                    </div>
                </div>

                <hr>

                <div class="abajo">
                    <ul>
                        <li>Opción de subir al sitio web hasta 150 imágenes.</li>
                        <li>1 - 7 secciones.</li>
                        <li>Certificacion SSL.</li>
                        <li>Garantía de 2 años.</li>
                        <li>Propiedad del código fuente.</li>
                        <li>Diseño responsivo.</li>
                        <li>Links directos a redes sociales .</li>
                        <li>Pie de página / footer con políticas de la empresa.</li>
                        <li>Barra de navegación (navbar). </li>
                        <li>Formulario de contacto.</li>
                        <li>Hosting y Dominio ( 1 año).</li>
                    </ul>
                    
                    <strong>Desde: $3,100 MXN</strong>

                    <a href="pdf/Paquetes-Websmiths3.pdf" target="_blank"> <div class="btn__webBasico"><p>Ver</p></div> </a>
                </div>

            </div>


            <div class="tarjeta">
                <div class="arriba">
                    <div class="img__contenedor__webAvanzado">
                        <div class="img__webAvanzado"></div>
                    </div>
                    <div class="titulo__subtitulo">
                        <h2>Web Avanzado</h2>
                        <p>
                        Ideal para negocios medianos o empresas. Da a conocer a tus futuros clientes sobre tus servicios o productos con estilo y presentación. 
                        </p>
                    </div>
                </div>

                <hr>

                <div class="abajo">
                    <ul>
                        <li>Opción de subir al sitio web hasta 200 imágenes.</li>
                        <li>7 secciones.</li>
                        <li>Certificacion SSL.</li>
                        <li>Garantía de 2 años.</li>
                        <li>Propiedad del código fuente.</li>
                        <li>Diseño responsivo.</li>
                        <li>Links directos a redes sociales .</li>
                        <li>Pie de página / footer con políticas de la empresa.</li>
                        <li>Barra de navegación (navbar). </li>
                        <li>Formulario de contacto.</li>
                        <li>Hosting y Dominio ( 1 año).</li>            
                    </ul>
                    
                    <strong>Desde: $4,100 MXN</strong>

                    <a href="pdf/Paquetes-Websmiths4.pdf" target="_blank"> <div class="btn__webAvanzado"><p>Ver</p></div> </a>
                </div>

            </div>

        </div>
        

        <section class="btn__cotizacion">
            <div class="boton__paquetes__cotizacion">
                <div class="texto">
                    <p>
                        Contactanos para pedir tu cotización sin costo
                    </p>
                </div>
                <div class="flecha">
                    <i class="fas fa-caret-right"></i>
                </div>
            </div>
        </section>
        

    </section> 


    <!-- Seccion de Ventajas -->

    <section class="ventajas">
        <div class="wave__down"> </div>

        <div class="contenedor__porqueSitioWeb">
            
            <div class="rocket__contenedor">
                <div class="rocket"></div>
            </div>



            <div class="contenedor">
                <h2>¿Por qué un sitio web?</h2>
                <br><br>
                <p>
                En la actualidad, y sobre todo, en estos tiempos de pandemia, la realidad actual es que el éxito de los negocios dependen en gran medida de las tecnologías que marcan su presencia en el mundo Web.
                <br><br>
                Tener presencia en el internet es una oportunidad para pequeñas y medianas empresas, pues está brinda credibilidad ante los clientes potenciales y ayuda a ser visibles en los buscadores, lo que puede tener diversos beneficios , tanto económicos como de impacto social , algo que se debería tomar en cuenta al momento de competir con otras empresas o querer alcanzar más gente con tu marca.

                </p>
            </div>
           
        </div>

        <div class="btn__ventajas__down">
            <div class="btn__down">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>


    <!-- portafolio section -->
    <section class="portafolio">

        <div class="todoport">
            <h2>Portafolio</h2>
            <div class="parrafo">
            <p>Hemos desarrollado varias páginas web que han ayudado a mucha gente.</p>
            </div>
            <div class="contenedorp">

                <div class="fila1__imagenes">

                    <div class="bloque">
        
                    <div class="portafolio__primeraimg"></div>
                        <a href="http://exvotosmexicanos.com/" target="blank">
                            <p>Exvotos Mexicanos</p>

                        </a>
                    </div>  

                    <div class="bloque">
                        <div class="portafolio__segundaimg"></div>
                        <a href="http://www.psicologocarlosmur.com" target="blank">
                            <p>Psicológo</p>
                        </a>

                    </div>
                </div>
                <div class="fila2__imagenes" >

                    <div class="bloque">
                        <div class="portafolio__terceraimg"></div>
                        <a href="http://implanteglandulahipofisiscerdo.com/" target="blank">
                            <p>Implante</p>

                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Lenguajes section -->
    <section class="lenguajes">    

        <div class="container1">

            <div class="row">
                <div class="colu">
                    <h2>¿Qué lenguajes manejamos?</h2>
                    <p>Nuestras páginas se desarrollan con ayuda de las siguientes tecnologías:</p>
                </div>
                <div class="colu1">

                    <div class="up__colu1">
                        <div class="cardi">
                            <span class="iconify" data-icon="icomoon-free:html-five" data-inline="false"></span>
                        </div>
                        <div class="cardi">
                            <span class="iconify" data-icon="cib:css3-shiled" data-inline="false"></span>            
                        </div>
                    </div>
                    
                    <div class="down__colu1" >
                        <div class="cardi">
                            <span class="iconify" data-icon="cib:php" data-inline="false"></span>
                        </div>
                        <div class="cardi">
                            <span class="iconify" data-icon="bx:bxl-jquery" data-inline="false"></span>            
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Contact form section -->
    <section class="contactform">

        <div class="container">
            <div class="form-wrapper">
                <div class="form-title">
                    <p>¡Contáctanos!</p>
                </div>
                <div class="form-content">
                    <p class="form-heading">
                        Ingresa tus datos
                    </p>
                    <form class="form">
                        <div class="input-wrapper">
                            <input type="text"  id="name" class="input">
                            <label for="name">Nombre(s)</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text"  id="subject" class="input">
                            <label for="subject">Apellidos</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="email"  id="email" class="input">
                            <label for="name">Correo electrónico</label>
                        </div>
                        <div class="msg-wrapper">
                            <textarea id="message"></textarea>
                            <label for="message">Asunto</label>
                        </div>
                    </form>
                    <div class="btn-wrapper">
                        <button class="btn">Enviar</button>
                    </div>
                </div>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
            </div>
        </div>

    </section>


    <!-- Redes section -->
    <section class="redes">


    <div class="redes-sociales">
        <ul>
            <li><a href="#"><i class="fab fa-whatsapp fa-5x" aria-hidden="true"></i></a></li> 
            <li><a href="#"><i class="fa fa-google fa-5x" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></a></li>
        </ul>
    </div>

    </section>
 
    <!-- footer -->
    
        <footer>
            <div class="footer-logo">
                <img src="../img/websmiths-logo.png" alt="">
            </div>
            <div class="footer-bottom">
                <p>Copyright &copy;2021 Websmiths. Designed by <span>Websmiths</span></p>
            </div>
        </footer>
    

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/mainPageEffects.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	
</body>
</html>