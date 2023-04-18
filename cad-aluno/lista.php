<html>
    <head>
    </head>
    <body>
        <?php 
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $matricula=$_POST['matricula'];
        $tecni=$_POST['tecni'];
        $ano=$_POST['ano'];

        ?>
        <table>
        <tr>
            <th>seu nome completo</th>
            <td><?php echo "$nome"?></td>
        </tr>
        <tr>
            <th>seu email</th>
            <td><?php echo "$email"?></td>
        </tr>
        <tr>
            <th>telefone de contato</th>
            <td><?php echo "$tel"?></td>
        </tr>
        <tr>
            <th>Seu numero de matricula</th>
            <td><?php echo "$matricula"?></td>
        </tr>
        <tr>
            <th>curso técnico</th>
            <td><?php echo "$tecni"?></td>
        </tr>
        <tr>
            <th>Ano que você está</th>
            <td><?php echo "$ano"?></td>
        </tr>
        </table>
        <button><a href="editcadastro.php">EDITAR</a></button>
    </body>
</html>