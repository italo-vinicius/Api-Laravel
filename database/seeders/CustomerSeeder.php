<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(35)->has(Invoice::factory()->count(10))->create();
        Customer::factory()->count(35)->has(Invoice::factory()->count(10))->create();
        Customer::factory()->count(25)->has(Invoice::factory()->count(24))->create();
        Customer::factory()->count(25)->has(Invoice::factory()->count(24))->create();
        Customer::factory()->count(50)->has(Invoice::factory()->count(4))->create();
        Customer::factory()->count(300)->has(Invoice::factory()->count(4))->create();
    }
}
