<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira aula PHP</title>
</head>
<body>
    <form action="saida.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required >
        <br><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" minlength="11" maxlength="11" required >
        
        <br><br>
        
        <input type="submit">
    </form>
</body>
</html>