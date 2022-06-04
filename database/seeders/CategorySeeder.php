<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $categories = [

            ['name' => 'IT'],
            ['name' => 'SPORT'],
            ['name' => 'MAGASIN'],
            ['name' => 'ELECTONIC'],

        


        ];

        foreach($categories as $category )
        {
            Category::create($category);
        }
        
    }
}
