<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('menuses')->insert([
                'name' => $faker->company,
                'ingredient' => $faker->sentence($nbWords = 20, $variableNbWords = true),
                'price' => 15.00,
                'img_url' => "https://www.guiadasemana.com.br/contentFiles/image/2018/02/FEA/principal/52618_w840h0_1518708939prato-feito.jpg",
                'restaurant_id' => 1
            ]);
        }
    }
}
