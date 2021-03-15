<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
         DB::table('products')->insert([
         	[
        	"name"=>"LG Mobile",
        	"price"=>"10000",
        	"description"=>"a smart phone",
        	"category"=>"mobile",
        	"gallery"=>"https://5.imimg.com/data5/NT/UC/WR/SELLER-82975943/samsung-galaxy-a7-a750-mobile-phone-500x500.jpg",
        	
        ],
        [
        	"name"=>"OPPO Mobile",
        	"price"=>"10000",
        	"description"=>"a smart phone",
        	"category"=>"mobile",
        	"gallery"=>"https://www.zdnet.com/a/hub/i/2020/06/05/c03437ee-4ea6-4c75-9e38-fbcaded8e50d/galaxy-note-10.jpg",
        	
        ]
         ]);
    }
}
