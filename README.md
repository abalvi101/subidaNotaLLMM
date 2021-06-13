# subidaNotaLLMM

## Organización

El archivo index.html corresponde al login, el cuál tiene un formulario vinculado con login.php que hace un select a la base de datos y verifica que la cuenta es correcta.
Si el login se realiza con éxito se redirige a la página principal (subindex.html). Debajo del formulario hay una ruta hacia la página del registro.
Esta es register.html, que tiene un formulario que mediante register.php verifica primero que en la base de datos no haya usuario con el mismo nombre
ni email y luego la hace insert con la contraseña encriptada para más seguridad. Si el registro se realiza con éxito, es redirigido al login donde se deberá
iniciar sesión.

Todas las páginas están hechas en su totalidad con Bootstrap 5. Como futura actualización me gustaría añadirle contenido y mediante JavaScript para habilitar
la barra de búsqueda del navbar.
