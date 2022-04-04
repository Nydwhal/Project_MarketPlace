<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'label' => 'Iphone7',
                    'description' => 'Iphone de gamme moyenne',
                    "initial_price" => '277.00',
                    "final_price" => '00.00',
                    "start_date" => '2014-06-26 04:07:31',
                    "end_date" => '2014-06-26 04:07:31',
                    'state' => 'on_sale',
                ],
                [
                    'label' => 'Ps5',
                    'description' => 'Console next gen',
                    "initial_price" => '999.99',
                    "final_price" => '00.00',
                    "start_date" => '2014-06-26 04:07:31',
                    "end_date" => '2014-06-26 04:07:31',
                    'state' => 'on_sale',
                ],
                [
                    'label' => 'Chaise',
                    'description' => 'Chaise en bois',
                    "initial_price" => '30.00',
                    "final_price" => '00.00',
                    "start_date" => '2014-06-26 04:07:31',
                    "end_date" => '2014-06-26 04:07:31',
                    'state' => 'sold',
                ],
            ]
        );
    }
}
