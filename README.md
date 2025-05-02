# 📝 API RESTful de Notas (Laravel)

Este proyecto es una API RESTful desarrollada en Laravel para gestionar notas. Permite crear, listar, visualizar y eliminar notas utilizando endpoints simples.

---

## 🔧 Instalación del proyecto

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

## 📦 Ejecutar migraciones

Para crear las tablas necesarias en la base de datos:

php artisan migrate

---

## ✅ Ejecutar los tests

Para correr los tests definidos en el proyecto:

php artisan test

---

## 🚀 Ejecutar el servidor local

Para iniciar el servidor de desarrollo de Laravel:

php artisan serve

Accede a tu API en:

http://127.0.0.1:8000

---

## 📌 Endpoints disponibles

| Método | Ruta              |
|--------|-------------------|
| GET    | /api/notes        |
| POST   | /api/notes        |
| GET    | /api/notes/{id}   |
| DELETE | /api/notes/{id}   |

---

## 🧪 Ejemplos con PowerShell (Invoke-RestMethod)

### Crear una nota
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes" `
  -Method POST `
  -Headers @{ "Accept" = "application/json" } `
  -ContentType "application/json" `
  -Body '{ "title": "Mi primera nota", "content": "Contenido de ejemplo" }'

### Listar todas las notas
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes" `
  -Method GET `
  -Headers @{ "Accept" = "application/json" }

### Ver una nota específica
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes/1"

### Eliminar una nota
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/notes/1" `
  -Method DELETE `
  -Headers @{ "Accept" = "application/json" }

---

## 🛠 Requisitos

- PHP ≥ 8.1
- Composer
- Laravel 12.x
- SQLite
- PowerShell

---

## 🧑‍💻 Autor

Desarrollado por Benjamín Vega Hernández