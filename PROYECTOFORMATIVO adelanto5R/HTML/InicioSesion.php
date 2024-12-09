<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odontologia sergio alvarado</title>
    <link rel="stylesheet" href="../css/iniciosesion.css">
</head>
<body>
   <?php include "CONEXION.PHP"; ?>
    <div class="container">
      
        <main>
            <div class="login-form">
                <form>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password">

                    <button type="submit" class="login-button">Login</button>

                    <div class="extras">
                        <a href="#" class="forgot-password">Olvido su contraseña?</a>
                        <a href="#" class="forgot-password">Registrarse</a>
                    </div>
                </form>
            </div>
            <div class="content">
                <h1>Odontologia Sergio Alvarado</h1>
            </div>
        </main>
    </div>
</body>

</html>