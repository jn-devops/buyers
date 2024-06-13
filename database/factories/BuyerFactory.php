<?php

namespace Homeful\Buyers\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Homeful\Buyers\Models\Buyer;

class BuyerFactory extends Factory
{
    protected $model = Buyer::class;

    public function definition()
    {
        return [
            'reference_code' => $this->faker->uuid(),
            'rating' => $this->faker->word(),
            'paid_on' => $this->faker->date()
        ];
    }
}
