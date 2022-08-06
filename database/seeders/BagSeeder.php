<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bag;
use Illuminate\Database\Seeder;

class BagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bags = [
            [
                'brand' => 'Jansport',
                'type' => 'Backpack',
                'color' => 'Red',
                'price' => '1000'
            ],
            [
                'brand' => 'Hawk',
                'type' => 'Backpack',
                'color' => 'Violet',
                'price' => '999'
            ],
            [
                'brand' => 'vans',
                'type' => 'Backpack',
                'color' => 'Red',
                'price' => '1000'
            ],
            [
                'brand' => 'The north face',
                'type' => 'Backpack',
                'color' => 'Red',
                'price' => '1000'
            ],
           

        ];

        foreach($bags as $b){
            Bag::create($b);
        }
    }
}