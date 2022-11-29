<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
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
                    <img src="./img/Cartoon-Lâmpada-PNG.png" class="div-D_logo"> Registration
                </h2>
                <form action="../api/cadastro.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="div-field" placeholder="Gabriela" required>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" class="div-field" placeholder="gabriel@email.com" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="div-field" placeholder="********************" required>
                    <button  type="submit"class="btn div-success" name="submit">Registration</button>
                    <div class="div-paragraph">
                        <a href="../api/forgot.php" class="_97w4">Esqueceu a conta?</a>
                        <a href="../api/registration.php">Não está cadastrado ainda?</a>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<form action="../api/login.php" method="POST">
   
</form>
</html>


