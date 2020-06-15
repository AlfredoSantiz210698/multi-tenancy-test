










* composer require laravel/ui
* php artisan ui vue --auth
* npm install && npm run dev



php artisan config:clear
    php artisan cache:clear
    composer dump-autoload
    php artisan view:clear
    php artisan route:clear




* CREATE DATABASE IF NOT EXISTS tenancy;
* CREATE USER IF NOT EXISTS tenancy@localhost IDENTIFIED BY '12345678';
* GRANT ALL PRIVILEGES ON *.* TO tenancy@localhost WITH GRANT OPTION;
            * GRANT ALL ON tenancy.* TO tenancy@localhost
* Configurar las conexiones de la DB
* Añadir variables en el .env de la conexion
* Indicar que la conexión es será en System
* composer require hyn/multi-tenant
* php artisan vendor:publish --tag=tenancy
* Mover migraciones default a otro folder
* Crear migración
    * En caso del error    Illuminate\Database\QueryException  : SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 1000 bytes (SQL: alter table `hostnames` add unique `hostnames_fqdn_unique`(`fqdn`))
    Modificar el archivo AppServiceProvider:
        Schema::defaultStringLength(191);
    * Añadir LIMIT_UUID_LENGTH_32=true en el .env
    * php artisan config:cache
* Configurar migraciones y seeder del tenant
* Modelos: php artisan make:model Models/TiposPapel -m

* Para las migraciones de cada tenant, es importante modificar la query de permisos.
    vendor\hyn\multi-tenant\src\Generators\Webserver\Database\Drivers

* Configurar el auth para el user del tenant