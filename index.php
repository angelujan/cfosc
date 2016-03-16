<?php include('header.php');?>
<div class="wrapper">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner"></div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros spacing" id="nosotros">
        <div class="container text-center">
            <h1 class="header gray">SOBRE LA PLATAFORMA</h1>
            <p class="text text-justify-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CATEGORÍAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="categorias" id="categorias">
        <div class="parallax-container">
            <div class="parallax">
                <img src="img/parallax/bg1.jpg">
            </div>
            <div class="container spacing text-center">
                <h1 class="header yellow">CATEGORÍAS</h1>
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <a href="page-categoria.php"><h3 class="yellow">Educación</h3></a>
                        <p class="text white text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <a href="page-categoria.php"><h3 class="yellow">Salud</h3></a>
                        <p class="text white text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                       <a href="page-categoria.php"> <h3 class="yellow">Seguridad Social</h3></a>
                        <p class="text white text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DUDAS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto spacing" id="dudas">
        <div class="container">
            <h1 class="header gray text-center">¿TIENES DUDAS?</h1>
            <div class="row no-margin">
                <div class="col-sm-6">
                    <p>
                        <span class="yellow">Dirección:</span><br>
                        Ave. Heroico Colegio Militar, No. 4700, Col. Nombre de Dios. C.P. 31156 
                    </p>
                    <p>
                        <span class="yellow">Teléfono:</span><br>
                        (614) 424 2238<br>
                        (614) 424 0305
                    </p>
                    <p>
                        <span class="yellow">Correo</span><br>
                        contacto@cfosc.mx
                    </p>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" placeholder="Nombre" required>
                    <input type="text" name="phone" id="phone" placeholder="Teléfono">
                    <input type="text" name="email" id="email" placeholder="Correo" required>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                    <input class="pull-right" type="submit" value="Enviar">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php');?>