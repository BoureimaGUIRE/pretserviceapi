<?php

namespace Database\Factories;


use App\Models\DetailPret;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailPretFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailPret::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        $montantPreleve = array('40000', '30000', '20000', '10000');
        $echeanceMois = array('2022-01');
        

        return [
            'montantPreleve ' => $montantPreleve [array_rand($montantPreleve , 1)],
            'echeanceMois' => $echeanceMois[array_rand($echeanceMois, 1)],
            'pret_id' => rand(1, 10)
        ];
    }
}
