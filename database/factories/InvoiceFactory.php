<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoice>
 */
class InvoiceFactory extends Factory
{

    protected $model = Invoice::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100,10000),
            'status' => $status,
            'billed_at' => $this->faker->dateTimeThisDecade(),
            'paid_at' => $status == 'P' ? $this->faker->dateTimeThisDecade() : NULL,

        ];
    }
}
