<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\review;
use App\Models\product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // product::factory(50)->create();

        // review::factory(50)->create();
        product::factory(50)
            ->create();
        review::factory(300)
            ->create();
    }
}
