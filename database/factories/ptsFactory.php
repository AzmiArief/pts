<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ptsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_karyawan' => $faker->name,
            'hadir' => $faker->dateTime,
            'izin' => $faker->dateTime,
            'bolos' => $faker->dateTime,
            'status_murid' => $faker->boolean(),
        ];
    }
}
