<!DOCTYPE html>
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <title>Login - GLAZIK</title>
    </head>
    <body>
        <div>
            <!-- Codrops top bar -->
            <!-- <div class="codrops-top"> -->
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span><center>Login - Auto Ecole GLAZIK</center></span></h1>
			
            </header>			
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                        <div class="form_login">
                            <form  action="controller.php" autocomplete="on" method="POST">
                                    <h2><center>Espace Privilégié</center></h2> 
                                    <p> 
                                        <label for="username" data-icon="u" > Login : </label>
                                        <input id="username" name="username" required="required" type="text" class="alt" />
                                    </p>
                                    <p> 
                                        <label for="password" data-icon="p"> Password : </label>
                                        <input id="password" name="password" required="required" type="password"/> 
                                    </p>
                                
                                    <p> 
                                        <input type="submit" value="Login" /> 
								    </p>
								    <?php
									   if (isset($_GET["message"])&& $_GET["message"] == "error") {
										  echo "Mauvais Login ou mot de passe";
									   }
								    ?>
                            </form>
                        </div>
                </div>  
        </div>
    </body>
</html>