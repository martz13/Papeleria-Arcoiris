# Papeleria-Arcoiris

_Sistema de altas bajas cambios y consultas para pymes, en el cual llevamos el control del inventario de una papeler铆a._

## Descripci贸n
_Para poder usar este proyecto necesitamos tener un servidor local y una conexi贸n a nuestra base de datos, Xampp es una herramienta que nos proporciona estas herramientas_

### Instalaci贸n 馃敡
_Para comenzar debemos crear una carpeta en la ruta C:xampp/htdocs/* nombre de tu carpeta * . Aqu铆 colocaremos todas las carpetas del repositorio._

_Posteriormente en el archivo httpd-vhosts.conf de la ruta C:\xampp\apache\conf\extra, vamos a a帽adir un virtual host con las lineas de c贸digo siguientes:_


```
<VirtualHost *:80>
        ServerAdmin example.com  
        DocumentRoot "C:/xampp/htdocs/example.com/public"  
        ServerName *nombre de tu carpeta*  
        ErrorLog "logs/example.com-error.log"  
        CustomLog "logs/example.com-access.log" common  
        <Directory "C:/xampp/htdocs/example.com/public">  
            Options All  
            AllowOverride All  
            Require all granted  
        </Directory>  
</VirtualHost>
```
_Y desp煤es nos dirijimos a la ruta C:\Windows\System32\drivers\etc y agragamos la siguiente linea en el archivo "hosts":_
```
127.0.0.1 example.com
```
## Creaci贸n de la base de datos
_Ya que hicimos estos cambios podemos dar Start a Apache y a MySQL de xampp y procedemos a entrar en el navegador de nuestra preferencia a localhost/phpmyadmin_
_Aqu铆 debemos crear una base de datos nueva, solo colocamos el nombre y damos en el boton Crear, posteriormente crearemos una tabla con el nombre requerido y colocaremos los detalles de cada campo que coloquemos_


## Especificaciones

   * Lenguaje de programaci贸n: PHP.
   * Base de datos: MySQL.
   * Servidor: Apache.
   * FrontEnd: HTML + Bootstrap
   * Sin framework BackEnd.

## Funcionalidades

   * Altas: Puedes agregar productos nuevos a la base de datos cada vez que sea necesario.
   * Bajas: Eliminar un producto no ser谩 un problema, solo da clic a un bot贸n y el sistema lo eliminar谩 autom谩ticamente.
   * Consultas: Te permite hacer b煤squedas dentro del sistema para encontrar un producto en espec铆fico.
   * Cambios: Te permite alterar los datos introducidos anteriormente de un producto, y actualizarlo de acuerdo a tu preferencia.

## Autor
 *  Mario Mart铆nez Maldonado

## Video explicativo
https://www.youtube.com/watch?v=sbwFO_3uPkY






