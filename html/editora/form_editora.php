<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Editora </title>
    </head>
    <body>
        <h1>Nome da Editora:</h1>
        <form action="">
            <fieldset>
                <legend>Formulário da Editora</legend>
                <label for="editora">Editora</label>
                <input type="text" name="editora" id='editora'>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>

        <table>
            <tr>
                <th>Editoras</th>
            </tr>

            <?php foreach ($lista_editora as $editora): ?>
                <tr>
                    <td><?= $editora['editora'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>