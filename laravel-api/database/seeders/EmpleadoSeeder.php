<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    public function run(): void
    {

        $data = [
            ['nombre'=>'juan','apellido'=>'dammer','correo'=>'agradecidocondios1@demo.com','salario'=>3500.00],
            ['nombre'=>'pedro','apellido'=>'berrios','correo'=>'agradecidocondios12demo.com','salario'=>4200.50],
            ['nombre'=>'francisco','apellido'=>'cuaquira','correo'=>'agradecidocondios41@demo.com','salario'=>3800.75],
        ];
        
        foreach ($data as $e) { Empleado::create($e); }
    }
}
