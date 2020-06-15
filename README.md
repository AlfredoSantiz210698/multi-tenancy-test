
# Muti-tenancy
Prueba de implementación multi-tenancy con hyn/multi-tenant 5.6.

### Instalación

```
composer install
npm install
npm run dev
php artisan migrate
```
* Crear el archivo .env tomando como base .env.example.
* En caso de algún error para crear usuarios de la DB, modificar el archivo:
```
vendor\hyn\multi-tenant\src\Generators\Webserver\Database\Drivers\MariaDB Línea 55 (aprox)
```

reemplazar la línea por:

```
return $connection->statement("GRANT $privileges ON *.* TO `{$config['username']}`@'{$config['host']}'");
```


### Modo de uso

* **Registro de clientes**. Accediendo al formulario de registro ( Ej. [127.0.0.1:8000/register]() ), existe un campo de texto llamado "Nombre del host", en el ingresar el nombre del sitio deseado, por ejemplo, **realhost** para acceder posteriormente como **realhost.127.0.0.1**.

* **Registro de usuarios dentro del cliente**. Acceder en el formulario de registro del cliente. Los clientes se almacenan en la tabla **hostnames** en la columna **fqdn (Full Qualified Domain Name)**. Para este caso el cliente es **realhost.127.0.0.1**.

* En caso de no poder acceder al host del cliente (**realhost.127.0.0.1**) verificar que la configuración de los hosts del servidor estén correctamente configurados para resolver los hosts de entrada.