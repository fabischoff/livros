<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title> Cadastro do Autor </title>
    </head>
    <body>
        <h1>Nome do autor:</h1>
        <!--Ver formulários-->
        <form action="">
            <fieldset>
                <legend>Novo Autor</legend>
                <label for="autor">Nome:</label>
                <input type="text" name="autor" id="autor">
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
        

        <table>'
            <tr>
                <th>Autores</th>
            </tr>

            <?php foreach ($lista_autor as $autor): ?>
                <tr>
                    <td><?= $autor['autor'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>