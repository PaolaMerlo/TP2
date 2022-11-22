<?php

namespace Database\Factories;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    

    public function definition()
    {
        return [
            'Nombre_Cliente'=>$this->faker->name(),
            'Apellido_Cliente'=>$this->faker->lastName(),
            'NumeroTelefono'=>$this->faker->phoneNumber(),
            'Direccion'=>$this->faker->address(),
            'FechaDeCompra'=>$this->faker->date()
        ];
    }
}
