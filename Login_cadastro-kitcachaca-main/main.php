<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="css/animacao.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo!</h2>
                <p class="description description-primary">Caso ainda não seja cadastrado</p>
                <p class="description description-primary">faça seu cadastro no botão abaixo</p>
                <button id="btnVoltar" class="btn btn-primary" 
                onclick="window.location.href = 'http://localhost/KitCachaca/Login_Cadastro-kitcachaca-main/index.php'">
                Cadastro</button>
            </div>
            <div class="second-column">
                <h2 class="title title-kit">Kit Cachaça</h2>
                <h2 class="title title-second">Login</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">use seu email para logar:</p>
                <form class="form" action="login.php" method="POST">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="usuario" name="text" type="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senha" type="password" placeholder="Senha">
                    </label>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div align="center">
                      <p>Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <a class="password" href="#">esqueceu a senha?</a>
                    <button type="submit" class="btn btn-second">Logar</button>
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <!--<div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, amigo!</h2>
                <p class="description description-primary">Entre com suas informações</p>
                <p class="description description-primary">e comece a comprar com a gente</p>
                <button id="signup" class="btn btn-primary">sign up</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Entrar</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>--><!-- social media --><!--
                <p class="description description-second">ou use seu e-email para se registrar:</p>
                <form class="form" method="POST">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="usuario" type="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="senha" type="password" placeholder="Senha">
                    </label>

                    <a class="password" href="#">esqueceu a senha?</a>
                    <button type="submit" class="btn btn-second">sign in</button>
                </form>
            </div>
        </div>--><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>

</html>