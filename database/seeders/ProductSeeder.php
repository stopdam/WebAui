<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' =>'SB 1',
                'price' =>'500',
                'description' =>'ชุดเซตออกกำลังกาย',
                'category' =>'sportbar',
                'gallery' =>'https://i.ibb.co/r45t03Z/144970296-166551551652479-7445788518834345385-n.jpg',
            ],
            [
                'name' =>'SB 2',
                'price' =>'500',
                'description' =>'กางเกงออกกำลังกาย',
                'category' =>'sportbar',
                'gallery' =>'https://i.ibb.co/tJHL69j/144774199-160694069016391-2669337032099333599-n.jpg',
            ],
            [
                'name' =>'SB 3',
                'price' =>'500',
                'description' =>'ชุดเซตออกกำลังกาย',
                'category' =>'sportbar',
                'gallery' =>'https://i.ibb.co/L0C1LxQ/145209895-793207831409019-7258888829421992596-n.jpg',
            ],
            [
                'name' =>'SB 4',
                'price' =>'500',
                'description' =>'ชุดเซตออกกำลังกาย',
                'category' =>'sportbar',
                'gallery' =>'https://i.ibb.co/3Y39JYv/145409851-5044061072302466-3409613453030992218-n.jpg',
            ]
        ]); 
    }
}
