API RESTful de Notas

Este es un repositorio con la solucion de una Prueba de Creacion de API RESTful de notas basico

---

Pasos a seguir para instalacion del proyecto

1. Clona el repositorio:

git clone https://github.com/BVH24/API-RESTful.git
cd API-RESTful

2. Instala las dependencias con Composer:

composer install

3. Copia el archivo de entorno y genera la clave de aplicación:

cp .env.example .env
php artisan key:generate

4. Crea la base de datos SQLite:

type nul > database/database.sqlite

5. Edita el archivo `.env` y configura:

DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite

---

Ejecucion de migraciones

Para creacion de tablas necesarias en la base de datos:

php artisan migrate

---

Ejecutar los tests

Para ejecutar los tests del proyecto

php artisan test

---

Ejecutar el servidor local

Para iniciar el servidor de Laravel:

php artisan serve
Accedeso a la API ingresando en el navegador lo siguiente:

http://127.0.0.1:8000

---

Endpoints disponibles

| Método | Ruta              |
|--------|-------------------|
| GET    | /api/notes        |
| POST   | /api/notes        |
| GET    | /api/notes/{id}   |
| DELETE | /api/notes/{id}   |

---

Comandos con PowerShell para ejecutar los Endpoints en consola

# Crear una nota
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes" `
  -Method POST `
  -Headers @{ "Accept" = "application/json" } `
  -ContentType "application/json" `
  -Body '{ "title": "Mi primera nota", "content": "Contenido de ejemplo" }'

# Listar todas las notas
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes" `
  -Method GET `
  -Headers @{ "Accept" = "application/json" }

# Ver una nota específica
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes/1"

# Eliminar una nota
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes/1" `
  -Method DELETE `
  -Headers @{ "Accept" = "application/json" }

---

Requisitos para clonar el proyecto

- PHP ≥ 8.1
- Composer
- Laravel 12.x
- SQLite
- PowerShell

---

Autor de este proyecto

Benjamín Vega Hernández