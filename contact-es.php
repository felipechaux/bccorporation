<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Contactenos | B&C Corporation</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Subscribe to my newsletter</h5>
                        <form action="#" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                            <button type="submit" class="btn original-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7">
                        <div class="top-social-area" align="left">
                            <a style="font-size: 18px" href="contact.php">EN</a>|<a style="font-size: 18px" href="#">ES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <br></br>
                        <a href="index-es.php" class="original-logo"><img src="img/core-img/logo_byc.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-center">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <?php
                            include 'includes/menu-es.php';
                            ?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" >
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2 style="color: black">Contacto</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">

                        <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <p style="font-size: 15px">Phone : +57 321-315-8093 </br>

                                           Email : <a href="mailto:legal@bccorporation.org">legal@bccorporation.org</a> </br>

                                           Carrera 8 #12c-35 Oficina 402
                                         </br>
                                       <a>Bogotá D.C. - Colombia</a>
                                        </p>

                                    </div>
                                </div>

                          <div class="col-12 col-md-6">
                            <form action="#" method="post">
                                <div class="row">

                                      <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="text" name="name" id="name" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Nombre</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="email" name="email" id="email" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Correo</label>
                                        </div>
                                    </div>

                                     <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="text" name="phone" id="phone" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Telefono</label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="text" name="subject" id="subject" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Asunto</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="group">
                                            <textarea name="message" id="message" required></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Mensaje</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn original-btn">Enviar</button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Google Map ##### -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9573664775457!2d-74.07672288573687!3d4.601658543790895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99a72c84acf9%3A0x99773eb3c499a2ae!2sCra.+8+%2312c-35%2C+Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1540645955002" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen title="aasas"></iframe>
    <div class="row">

        <div class="col-md-11 ">
         </br>
           
        </div>

         <!--<div class="col-md-6" style="background-image: url(img/bg-img/contacto2.jpg);background-size: 120%;background-repeat: no-repeat;">

            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>

         </div>-->

    </div>


     <!-- ##### Footer Area Start ##### -->
    <footer>
        <?php
          include 'includes/footer-es.php';
        ?>
    
    </footer>
    <!-- ##### Footer Area End ##### -->


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>
