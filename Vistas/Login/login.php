
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link href="../../assets/style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="session">
      <div class="left">
        <img class="st01" src="https://cursosdeexcel.sirv.com/Images/Excel_Navidad_Logo.png" alt="Logo">
      </div>
      <form action="../../Controladores/Login/Login.controller.php" method="POST" class="login"> 
        <input type="hidden" name="task" value="Ingresar" id="task">
        <h4>Prueba desarrollo Clases <span>EXCEL</span></h4>
        <p>BIENVENIDO! Inicia sesión con tu cuenta para continuar:</p>
        <div class="floating-label">
          <input placeholder="Usuario" type="text" id="usuario" autocomplete="off" name="usuario">
          <label for="usuarui">Usuario:</label>
          <div class="icon">
              <img  class="st0" src="../../assets/imagenes/usuario.png" alt="Usuario">
  
          </div>
        </div>
        <div class="floating-label">
          <input placeholder="Contraseña" type="password"  id="password" autocomplete="off" name="contrasena">
          <label for="password">Contraseña:</label>
          <div class="icon">
            <img  class="st0" src="../../assets/imagenes/password.png" alt="Usuario">          
          </div>
        </div>
        <button type="submit">Log in</button>
        <a href="https://www.linkedin.com/in/cristian-camilo-londo%C3%B1o-meneses-45ba36182" class="discrete" target="_blank">CCLM</a>
      </form>
    </div>
  </body>
</html>