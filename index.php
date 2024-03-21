<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistema</title>
</head>
<body>
    <?php
    if(isset($_GET['msgError'])){
        echo $_GET['msgError'];
    }
    ?>
    <form action="user.php" method="get">
        <label for="email">Email</label>
        <input type="email" id="email" name="user_mail"><br><br>
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="user_senha"><br><br>
        <button type="submit">Entrar</button>
    </form>
    
</body>
</html>