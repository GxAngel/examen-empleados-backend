# 📦 Backend - API REST de Empleados (Laravel + MySQL)

## 🚀 Descripción
Este backend permite **registrar y listar empleados** mediante una **API REST**, usando el framework **Laravel** y la base de datos **MySQL**.  
Forma parte del **Segundo Examen Parcial - Tecnologías de Internet**.

---

## ⚙️ Requerimientos
- PHP >= 8.1  
- Composer  
- MySQL  
- Laravel 11  
- Git

---

## 🧩 Instalación y configuración

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/tuusuario/examen-empleados-backend.git
   cd examen-empleados-backend

   Instalar dependencias

composer install


Configurar entorno

cp .env.example .env


Edita tu archivo .env con los datos de conexión a MySQL:

DB_DATABASE=empleados_db
DB_USERNAME=root
DB_PASSWORD=


Generar la key de Laravel

php artisan key:generate


Ejecutar migraciones y seeders

php artisan migrate:fresh --seed

🧠 Rutas de la API
Método	Endpoint	Descripción
GET	/api/empleados	Lista todos los empleados
POST	/api/empleados	Crea un nuevo empleado
📦 Ejecución del servidor
php artisan serve


El servidor estará disponible en:
👉 http://127.0.0.1:8000

🧪 Pruebas recomendadas

Puedes usar Postman o el navegador para probar las rutas:

GET http://127.0.0.1:8000/api/empleados

POST http://127.0.0.1:8000/api/empleados

📘 Créditos

Autor: Josue Angel Vallejos Condori 
Materia: Tecnologías de Internet
Examen: Segundo Parcial (Backend)