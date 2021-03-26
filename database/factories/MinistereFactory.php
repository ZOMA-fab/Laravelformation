<?php

namespace Database\Factories;

use App\Models\Ministere;
use Illuminate\Database\Eloquent\Factories\Factory;

class MinistereFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ministere::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            
            'nom'                               => $this -> faker->catchPhrase ,
            'ministre'                          => $this -> faker->realText($maxNbChars = 200, $indexSize = 2),
            'ministre_nomination_date'          => $this -> faker->dateTime($max = 'now', $timezone = null),
            'adresse'                           => $this -> faker->address ,
            'boite_postal'                               => $this -> faker->e164PhoneNumber,
            
        ];
    }
=======
            'nom' => $this->faker->catchPhrase,
            'ministre_nom' => $this->faker->name,
            'ministre_nomination_date' => $this->faker->dateTime($max = 'now', $timezone = null),
            'adresse' => $this->faker->address,
            'boite_postal' => $this->faker->postcode,
        ];
    } 
>>>>>>> e9747a1e9c0739e82ccd5013eed257a7d6d0f520
}
