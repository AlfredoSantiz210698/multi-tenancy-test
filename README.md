
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

* **Registro de clientes**. Accediendo al formulario de registro ( [127.0.0.1:8000/register]() ), existe un campo de texto llamado "Nombre del host", en el ingresar el nombre del sitio deseado, por ejemplo, **realhost** para acceder después del proceso de registro registro como **realhost.127.0.0.1**.

* **Registro de usuarios dentro del cliente**. Acceder al formulario de registro del cliente, en este caso el cliente **realhost.127.0.0.1**.

* En caso de no poder acceder al sitio del cliente (**realhost.127.0.0.1**) verificar que la configuración de los hosts estén correctamente configurados para resolver los hosts de entrada.