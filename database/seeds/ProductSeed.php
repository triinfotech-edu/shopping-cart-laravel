<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Bat 1';
        $product->description = 'This is really a good kashmiri willow bat';
        $product->image_path = 'http://www.khelmart.com/Cricket/zoomer_Image/KK_EW_000090_large.jpg';
        $product->price = 1600;
        $product->save();

        $product = new Product();
        $product->name = 'Bat 2';
        $product->description = 'Nice bat';
        $product->image_path = 'http://thecornishcricketcompany.co.uk/ekmps/shops/cornishcricket/images/kookaburra-kahuna-typhoon-6677-p.png';
        $product->price = 100;
        $product->save();

        $product = new Product();
        $product->name = 'Bat 3';
        $product->description = 'Awesome';
        $product->image_path = 'http://www.slatergartrellsports.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/4/0/400_kahuna.jpg';
        $product->price = 700;
        $product->save();

        $product = new Product([
        	'name' => 'Bat 4',
        	'description' => 'Some description',
        	'image_path' => 'http://www.khelmart.com/Cricket/zoomer_Image/KK_EW_000090_large.jpg', 
        	'price' => 2000
        ]);
        $product->save();
    }
}
