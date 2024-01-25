# El proyecto se basara en POO.


## Instalacion

Instalacion de librerias para ejecutar el proyecto correctamente con via [Composer](https://getcomposer.org/):

```bash
composer install
```
### Creacion del archivo .env 
  Se debe crear un archivo .env para hacer puede ingresar al navegador y crear el .env aqui iran todas las variables globales que se usaran en el archivo 
  de no crear el archivo se puede generar un error de :
  - InvalidPathException

  ![imagen de referencia para saber en donde crear el archivo .env](/src/img/foto%20env.png)



## Estructura del proyecto 

### Modelo: 
  El modelo representa la lógica de negocio y la gestión de datos de la aplicación. Es responsable de la manipulación de datos, la validación de datos y la lógica de negocio. El modelo se comunica con la base de datos y se encarga de la persistencia de     datos.
### Vista:
  La vista es la interfaz gráfica de usuario (GUI) de la aplicación. Es responsable de mostrar la información al usuario y de manejar los eventos de la interfaz. La vista no tiene acceso directo a la lógica de negocio y se comunica con el controlador       para obtener la información necesaria para mostrar.
### Controlador: 
  El controlador es el encargado de manejar las solicitudes de la aplicación y de coordinar la interacción entre el modelo y la vista. Es responsable de recibir las solicitudes de la aplicación, de invocar las acciones correspondientes en el modelo y de    enviar la información a la vista para mostrarla al usuario.


directorio Config 
contiene matrices con calve-valor aqui se pueden crear archivos que ayuden a configurar 
tipo la zona horari, las providers, los aliases de las clases.

tambien se puede condigurar la conexion a la base de datos. 


directorio public 

los recursos staticos, de js, css imagenes y fuentes de textos.

archivo .env 
Este archivo es para incluir variables locales de configuracion tipo, los datos de que se usan en la conexion de base 
de datos. 

archivo .gitignore
este archivo se utiliza para indicarle a git que archivos no se van a subir al repositorio


app: Esta carpeta contiene la lógica de negocio de la aplicación, incluyendo los modelos, controladores y vistas. Dentro de esta carpeta, se pueden incluir subcarpetas para organizar los archivos según su función.
public: Esta carpeta contiene los archivos públicos de la aplicación, como los archivos CSS, JavaScript e imágenes. También incluye el archivo index.php, que es el punto de entrada de la aplicación.
config: Esta carpeta contiene los archivos de configuración de la aplicación, como los archivos de conexión a la base de datos y los archivos de configuración de la sesión.
lib: Esta carpeta contiene las librerías y clases que se utilizan en la aplicación.
helpers: Esta carpeta contiene las funciones y utilidades que se utilizan en la aplicación.
vendor: Esta carpeta contiene las librerías y paquetes de terceros que se utilizan en la aplicación.
tests: Esta carpeta contiene los archivos de prueba de la aplicación.
