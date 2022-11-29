<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="icon" href="./img/Cartoon-Lâmpada-PNG.png">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100&display=swap" rel="stylesheet">
    <meta name="description"
        content="Bem-vindos(a) de volta ao ONE POSSIBILITY . Faça login para conferir as grandes novidade obtidas esse semestre.">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <title>Entre com a sua Conta</title>
</head>
<body>
    <div class="div-container">
        <div class="div-contact-box">
            <div class="div-left">
            </div>
            <div class="div-right">
                <h2>
                    <img src="./img/Cartoon-Lâmpada-PNG.png" class="div-D_logo"> Log in
                </h2>
                <form action="../api/efetuar_login.php" method="POST">
                    <input type="text"  name="email"class="div-field" placeholder="email@email.com">
                    <input type="password" name="password" class="div-field" placeholder="*********">
                    <?php
                    if(isset($_GET['error'])){
                        if($_GET['error'] == 1){
                        echo '<p class="paragraph" style="color: red !important;">email ou senha incorretos, tente novamente!</p>';
                        }
                    }
                    ?>
                    <button type="submit" class="btn div-success" name="submit">Log in</button>
                    <div class="div-paragraph">
                        <a href="../api/forgot.php" class="_97w4">Esqueceu a conta?</a>
                        <a href="../api/efetuar_login.php">
                            <a href="../html/registration.php">Não está cadastrado ainda?</a>
                            
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
