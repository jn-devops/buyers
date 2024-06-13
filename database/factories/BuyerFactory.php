<?php

namespace Homeful\Buyers\Database\Factories;

use Homeful\Buyers\Models\Buyer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuyerFactory extends Factory
{
    protected $model = Buyer::class;

    public function definition()
    {
        return [
            'reference_code' => $this->faker->uuid(),
            'rating' => $this->faker->word(),
            'paid_on' => $this->faker->date(),
        ];
    }
}
