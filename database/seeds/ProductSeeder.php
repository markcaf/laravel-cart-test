<?php

use App\Models\Product;
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
        $products = [
            [
                'name' => 'Burger Galaxy',
                'description' => 'Hamburger',
                'image' => 'https://assets.bonappetit.com/photos/5b919cb83d923e31d08fed17/1:1/w_2560%2Cc_limit/basically-burger-1.jpg',
                'price' => 100
            ],
            [
                'name' => 'Wakame',
                'description' => 'Sushi',
                'image' => 'https://i0.wp.com/www.piccolericette.net/piccolericette/wp-content/uploads/2020/06/4362_Goma.jpg?resize=895%2C616&ssl=1',
                'price' => 500
            ],
            [
                'name' => 'Margherita',
                'description' => 'Pizza',
                'image' => 'https://www.finedininglovers.it/sites/g/files/xknfdk1106/files/styles/recipes_1200_800_fallback/public/fdl_content_import_it/margherita-50kalo.jpg?itok=v9nHxNMS',
                'price' => 400
            ],
            [
                'name' => 'Taiwanese',
                'description' => 'Taiwan',
                'image' => 'https://www.agrodolce.it/app/uploads/2019/03/shutterstock-774713827.jpg',
                'price' => 200
            ]
        ];
  
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
