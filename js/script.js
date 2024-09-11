document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("formulario");
  const error = document.getElementById("error");
  let errores = [];
  const nombre = document.getElementById("nombre");
  const correo = document.getElementById("correo");
  const validarCorreo = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
  const contrasena = document.getElementById("contrasena");
  const antiguedad = document.getElementById("calendario");
  const color = document.querySelectorAll("input[type='radio']:checked");

  form.addEventListener("submit", function (event) {
    console.log(color);
    if (nombre.value.trim().length < 2) {
      errores.push("El nombre debe tener 2 caracteres como mínimo.");
    }

    if (!validarCorreo.test(correo.value.trim())) {
      errores.push("Introduzca un correo válido.");
    }

    if (contrasena.value.trim().length < 4) {
      errores.push("La contraseña debe tener 4 caracteres como mínimo.");
    }

    if (!antiguedad.value) {
      errores.push("Introduce una antiguedad válida.");
    }

    if (color.length < 1) {
      errores.push("Seleccione un color.");
    }

    if (errores.length > 0) {
      event.preventDefault();
      error.classList.remove("d-none");
      errores.forEach((element) => {
        error.innerHTML += element + "<br>";
      });
    }
  });
});
