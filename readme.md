# Todo en el proyecto es a base de clases con POO. 

Modelo -> Datos -> Logica de datos
Hacer peticion a la base de datos.

Vistas -> 
Templates de html y css, js


Controllador -> Logica de negocio
controla y decide como se muestran los datos.


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
