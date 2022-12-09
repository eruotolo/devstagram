## COMANDOS NECESARIOS PARA LARAVEL

## Nuevo Proyecto con Laravel y Docker (cambiar example-app)

- curl -s "https://laravel.build/example-app" | bash

## Starting & Stopping Sail

- sail up
- sail up -d
- sail stop
- sail down

# Control de Versiones de la Base de Datos

- sail artisan make:migration add_username_to_users_table (ejemplo de actualización campo en la base de datos).
- sail php artisan migrate

# Deploy en Producción

- sail npm run dev
- sail npm run build

// Run all Mix tasks...
- npm run dev

// Run all Mix tasks and minify output...
- npm run prod




