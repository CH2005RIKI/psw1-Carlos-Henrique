<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php include "header.html";?>

    <div class="all">
        <form action="lista.php" method="post">
        <div class="pessoal">
            <label for="nmaluno">Nome do aluno</label>
            <input type="text" name="nome" id="nmaluno" value="">
       
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            <label for="tel">telefone</label>
            <input type="text" name="tel" id="tel" placeholder="XXXXX-XXXX">

            <label for="matricula">Matricula</label>
            <input type="text" name="matricula" placeholder="matricula" id="Matricula">
            <label for="tecni">Cursando</label>
            <select name="tecni" id="tecni">
                <option value="">---</option>
                <option value="Agro Industria">Agro Industria</option>
                <option value="Agro Pecuaria">Agro Pecuária</option>
                <option value="Informática">Informática </option>
            </select>
            <label for="ano">Ano de ensino</label>
            <select name="ano" id="ano">
                <option value="">---</option>
                <option value="1°ANO">1°ANO</option>
                <option value="2°ANO">2°ANO</option>
                <option value="3°ANO">3°ANO</option>
            </select>
            <input class="btn" type="submit" value="SALVAR">
            </div>
        </form>
    </div> 
<?php include "footer.html";?>
</body>
</html>