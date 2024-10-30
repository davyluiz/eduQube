<?php
/*
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}*/
include('../controller/verifica_login.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="icon" href="../assets/ico/vecteezy_school.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../style/bulma.css" />
    <link rel="stylesheet" href="../style/style.css" />
    <script src="../scripts/painel.js"></script>

    <style>
        .image-center {
        display: block; /* Necessário para que o margin funcione corretamente */
        margin: 0 auto; /* Centraliza a imagem */
    }
</style>

    </style>
  </head>

  <body>
  <header>
    <div>
       <div class="dropdown is-desactivated btn-right-fixed">
            <div class="dropdown-trigger">
                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu2">
                <span>Menu</span>
                <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
                </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu2" role="menu">
                <div class="dropdown-content">
                <div class="dropdown-item has-text-centered">
                    <figure class="image-center image is-64x64">
                        <img src="../assets/img/guest.png" width="15px" height="15px" class="is-rounded"/>
                    </figure>
                    <br>
                    <?php echo $_SESSION['nome'];?>
                </div>
                <!--
                    <div class="dropdown-item">
                        <div class="dropdown-content has-text-centered">
                            <figure class="image-center image is-64x64">
                                <img src="assets/img/guest.png" width="15px" height="15px" class="is-rounded"/>
                            </figure>
                            <hr class="dropdown-divider" />
                            //<?php echo $_SESSION['nome'];?>
                        </div>
                    </div>-->

                    <hr class="dropdown-divider" />
                    <div class="dropdown-item has-text-centered">
                        <p>Configurações</p>
                    </div>
                    <hr class="dropdown-divider" />
                    <div class="dropdown-item has-text-centered">
                        <p>Perfil</p>
                    </div>
                    <hr class="dropdown-divider" />
                    <div class="dropdown-item has-text-centered">
                        <p>SGDE</p>
                    </div>
                    <hr class="dropdown-divider" />
                    <div class="dropdown-item has-text-centered">
                        <a href="../controller/logout.php"><p>Sair</p></a>
                    </div>
                    <!--
                    <div class="has-text-centered">
                    <a href="logout.php"  class="dropdown-item"><p class="has-text-white-bis exit_text_button">Sair</p></a>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>     
    
        <h2 class="title is-5 has-text-grey">Seja bem-vindo(a), <?php echo $_SESSION['nome'];?>!</h2>
    

    </header>
    <nav></nav>
 
  </body>
</html>
  
    
    
</head>

<body>
   


    <footer>
    </footer>
</body>