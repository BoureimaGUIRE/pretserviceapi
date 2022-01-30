<?php

namespace Database\Factories;


use App\Models\Pret;
use Illuminate\Database\Eloquent\Factories\Factory;

class PretFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pret::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $motifPret = array('Sante', 'Scolaire', 'Mariage', 'Moto', 'Baptême');
        $typePret = array('Avance sur Salaire', 'Bon de Pharmacie', 'Prêt Normal');
        $montant = array('400000', '300000', '200000', '100000');
        $retenueMensuelle = array('40000', '30000', '20000', '10000');
        $dateContraction = array('2021-12-01');
        $dateEcheance = array('2022-12-31');
        $dateDebutRetenue = array('2022-01-01');

        return [
            'motifPret' => $motifPret[array_rand($motifPret, 1)],
            'typePret' => $typePret[array_rand($typePret, 1)],
            'montant'  => $montant[array_rand($montant, 1)],
            'retenueMensuelle'  => $retenueMensuelle[array_rand($retenueMensuelle, 1)],
            'dateContraction' => $dateContraction[array_rand($dateContraction, 1)],
            'dateEcheance' => $dateEcheance[array_rand($dateEcheance, 1)],
            'dateDebutRetenue' => $dateDebutRetenue[array_rand($dateDebutRetenue, 1)],
            'employe_id' => rand(1, 10)
        ];
    }
}
