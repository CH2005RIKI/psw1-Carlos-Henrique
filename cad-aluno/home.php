<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COTTAGECORE PIANO - AULAS</title>
</head>
<body>
<form action="bemvindo.php" method="post">
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login
                <br>
                <br>
            PARA MAIS AULAS DE PIANO</h1>
            <img class="left-login-img" src=".//pianinho.jpg" alt="">
        </div>
        <div class="right-login">
            <div class="card-login">
               <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text"name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="botoes">
                <button class="btn-login" type="submit">login</button>
                <a href=".//infoaluno.php">clique aqui para cadastrar-se</a>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>