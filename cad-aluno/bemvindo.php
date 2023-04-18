<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM VINDO</title>
</head>
<?php
$user=$_POST['usuario'];
?>
<body>
        <div class="content">
            <div class="conteudo">
                <h2><?php
                echo"BEM VINDO DE VOLTA ";
                ?></h2>
                <h3><?php
                echo "$user"?></h3>
            </div>
        </div>
</body>
<style>
    body{
    margin: 0;
    padding: 0;
}

.content{
    padding-top: 10px;
    margin: 0;
    height: 100vh;
    width: 100%;
    background-color: rgb(104, 193, 234);
    display: flex;
    align-items: center;
    justify-content: center;
}
.conteudo{
    height: 40%;
    background-image: url(dogoculos.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    width: 40%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
}
.conteudo > h3{
    color: rgb(205, 17, 186);
}
.conteudo > h2{
    color: rgb(205, 17, 186);
}
</style>
</html>