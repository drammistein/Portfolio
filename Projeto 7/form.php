<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">


    <title>Login</title>

</head>
<body>

    <div class="area">
        <img class="logo" src="" alt="Logo">


        <form method="POST" action="validador.php">

            <input type="text" name="login" placeholder="Login" class="form-control" class="login" />
            <input type="password" name="password" placeholder="Senha" class="form-control">

          <!--  <label class="remember">
                <input type="checkbox" name="remember" value="1" />
                Lembrar senha
            </label>   -->

            <input type="submit" value="Entrar" class="btn btn-lg btn-primary btn-block" />

        </form>

        <p class="gray padding">&copy; Daniel Ramos 2021</p>
    </div>      

    <script src="assets/js/Jquery 3.6.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>

</body>
</html>