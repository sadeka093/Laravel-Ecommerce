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
        	"gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fus%2Fcell-phones&psig=AOvVaw3QOlbDic3gV1nQ8rQjMeZA&ust=1615799813126000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIihyqL1sO8CFQAAAAAdAAAAABAD",
        	
        ],
        [
        	"name"=>"OPPO Mobile",
        	"price"=>"10000",
        	"description"=>"a smart phone",
        	"category"=>"mobile",
        	"gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.indiamart.com%2Fproddetail%2Foppo-mobile-phones-f15-22052662297.html&psig=AOvVaw1_UeWU7LkViNEyeGL5ISf8&ust=1615800506968000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOjO3u73sO8CFQAAAAAdAAAAABAD",
        	
        ]
         ]);
    }
}
