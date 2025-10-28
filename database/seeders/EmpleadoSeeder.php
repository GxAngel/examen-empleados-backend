<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {
        $empleados = [
            ['nombre' => 'Carlos', 'apellido' => 'Pérez', 'correo' => 'carlos.perez@example.com', 'cargo' => 'Gerente', 'salario' => 4500],
            ['nombre' => 'María', 'apellido' => 'López', 'correo' => 'maria.lopez@example.com', 'cargo' => 'Secretaria', 'salario' => 3000],
            ['nombre' => 'Luis', 'apellido' => 'Gutiérrez', 'correo' => 'luis.gutierrez@example.com', 'cargo' => 'Técnico', 'salario' => 3200],
            ['nombre' => 'Ana', 'apellido' => 'Torres', 'correo' => 'ana.torres@example.com', 'cargo' => 'Contadora', 'salario' => 3800],
            ['nombre' => 'José', 'apellido' => 'Rojas', 'correo' => 'jose.rojas@example.com', 'cargo' => 'Chofer', 'salario' => 2900],
            ['nombre' => 'Lucía', 'apellido' => 'Mendoza', 'correo' => 'lucia.mendoza@example.com', 'cargo' => 'Recepcionista', 'salario' => 2700],
            ['nombre' => 'Andrés', 'apellido' => 'Flores', 'correo' => 'andres.flores@example.com', 'cargo' => 'Supervisor', 'salario' => 4100],
            ['nombre' => 'Carmen', 'apellido' => 'Vega', 'correo' => 'carmen.vega@example.com', 'cargo' => 'Analista', 'salario' => 3900],
            ['nombre' => 'Diego', 'apellido' => 'Santos', 'correo' => 'diego.santos@example.com', 'cargo' => 'Mecánico', 'salario' => 3400],
            ['nombre' => 'Rosa', 'apellido' => 'Fernández', 'correo' => 'rosa.fernandez@example.com', 'cargo' => 'Asistente', 'salario' => 2800],
        ];

        foreach ($empleados as $empleado) {
            Empleado::create($empleado);
        }
    }
}
