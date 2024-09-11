<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Formulario PHP</title>
</head>

<body>
  <main class="container">
    <h1 class="text-center mt-5">Formulario</h1>
    <form action="validar.php" method="POST" id="formulario">
      <fieldset class="d-flex flex-column form-group">
        <label for="nombre" class="form-check-label">Nombre*</label>
        <input type="text" name="nombre" id="nombre" class="form-control mb-3" />
        <label for="direccion" class="form-check-label">Dirección</label>
        <input type="text" name="direccion" id="direccion" class="form-control mb-3" placeholder="Calle y ciudad" />
        <label for="correo" class="form-check-label">Dirección de correo*</label>
        <input type="email" name="correo" id="correo" class="form-control" />
        <small class="mb-3">Nunca compartas tu correo con nadie</small>
        <label for="contrasena" class="form-check-label">Contraseña*</label>
        <input type="password" name="contrasena" id="contrasena" class="form-control mb-3" />
        <label for="calendario" class="form-check-label">Antiguedad*</label>
        <input type="date" name="calendario" id="calendario" class="form-control mb-3" />
        <label class="form-check-label mb-2">Elegir el color*:</label>
        <div class="radio mb-3">
          <input type="radio" name="color" id="rojo" value="rojo" class="form-check-input" />
          <label for="rojo">Rojo</label><br>
          <input type="radio" name="color" id="azul" value="azul" class="form-check-input" />
          <label for="azul">Azul</label><br>
          <input type="radio" name="color" id="verde" value="verde" class="form-check-input" />
          <label for="verde" class="form-check-label">Verde</label><br>
        </div>
        <label for="comentarios" class="form-check-label">Comentarios</label>
        <textarea name="comentarios" id="comentarios" rows="4" class="form-control mb-3"></textarea>
        <div class="privacidad mb-3">
          <input type="checkbox" name="politica" id="politica" class="form-check-input" /> Acepto la Política de Privacidad*
        </div>
        <div class="alert alert-danger d-none" id="error" role="alert"></div>
        <div class="botones mb-3">
          <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
          <button type="button" id="limpiar" name="limpiar" class="btn btn-success">Limpiar formulario</button>
        </div>
        <small>Los campos con asterisco (*) son oblligatorios</small>
      </fieldset>
    </form>
  </main>
  <script src="js/script.js"></script>
</body>

</html>