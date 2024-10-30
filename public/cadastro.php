<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eduQube - Cadastro</title>
    <link rel="icon" href="../assets/ico/brasao.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../style/bulma.css" />
    <!--<link rel="stylesheet" type="text/css" href="css/login.css">-->

    <style>
        html, body {
            font-family: 'Open Sans', serif;
            font-size: 14px;
            font-weight: 300;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;   
        }

        .hero.is-success {
            background: none;
        }

        /* Estilização para deixar o vídeo em background e fullscreen */
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Garante que o vídeo fique atrás do conteúdo */
            pointer-events: none; /* Evita interação com o vídeo */
        }

        video {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%; /* Preenche toda a largura da janela */
            height: 100%; /* Preenche toda a altura da janela */
            transform: translate(-50%, -50%); /* Centraliza o vídeo */
            object-fit: cover; /* Garante que o vídeo cubra todo o espaço */
        }

        /* Overlay para escurecer o vídeo */
        .video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Escurece o fundo para melhorar a legibilidade do texto */
            z-index: 0;
        }

        .hero-body {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .column.is-4.is-offset-4 {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        h3.title.has-text-grey {
            color: #4a4a4a;
            margin-bottom: 1.5rem;
        }

        .box {
            padding: 1.5rem;
        }

        input.is-large {
            font-size: 1.25rem;
            height: auto;
        }

        input::placeholder {
            font-size: 17px; 
            color: #888; 
            opacity: 1; 
        }

        button.is-block.is-link.is-large.is-fullwidth {
            background-color: #3273dc;
            color: white;
            font-size: 1.25rem;
            font-weight: 700;
        }

        .notification.is-danger, .notification.is-success, .notification.is-info {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        #logo_index {
            user-select: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 10rem;
            width: 10rem;
        }
    </style>
</head>

<body>

    <div class="video-container">
        <video autoplay muted loop>
            <source src="/assets/video/loop.mp4" type="video/mp4">
            Seu navegador não suporta o elemento de vídeo.
        </video>
    </div>

    <!-- Overlay para escurecer o fundo -->
    <div class="video-overlay"></div>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h2 class="title is-4 has-text-grey" title="#">eduQube</h2>
                    <div id="logo_index">
                        <img src="/assets/img/vecteezy_school.png">
                    </div>
                    <h2 class="title is-5 has-text-grey">Sistema de Gestão Educacional</h2>
                    
                    <?php
                    
                    if (isset($_SESSION['cadastro_sucesso'])):
                    ?>
                    <div class="notification is-success">
                        <p>Cadastro efetuado com sucesso!</p>
                        <p>Faça login informando o seu usuário e senha <a href="index.php">aqui</a></p>
                    </div>
                    
                    <?php
                    elseif (isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    ?>

                    <div class="box">
                        <form action="../controller/cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-medium" placeholder="Nome" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-medium" placeholder="Usuário">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-medium" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-medium is-fullwidth">Cadastrar</button>
                            <div class="field">
                            <div>
                                <br>
                                <p font-color="red">Já possui login?</p><u>
                                <a href="index.php">Entrar</a></u>
                            </div>    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
