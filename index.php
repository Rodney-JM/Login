<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistema</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="src/styles/main.css">
</head>
<body>
    <main>
        <section class="img_container">
            <img src="./src/assets/images/ilustrate-log.svg" alt="">
        </section>
        <section class="form_container">
            <h2 class="title"><i class="fa-solid fa-cloud" style="color: #8c67f4;"></i>FrancisCorp</h2>
            <?php
            if(isset($_GET['msgError'])){
                echo $_GET['msgError'];
            }
            ?>
            <form action="user.php" method="get">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="user_mail"><br><br>
                <label for="senha">Senha</label><br>
                <input type="password" id="senha" name="user_senha"><br><br>
                <button type="submit">Entrar</button>
                <br>
                <a href="#">Ainda não tem uma conta? Cadastre-se</a>
            </form>
        </section>
    </main>
    
</body>
</html>