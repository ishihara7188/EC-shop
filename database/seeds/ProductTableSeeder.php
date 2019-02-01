<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'imagePath' => 'https://images.eil.com/large_image/PRESTIGE_ALL_STARS_SOUL%2BJAZZ%2BVOLUME%2BTWO-442483.jpg',
            'title' => 'Jazz',
            'description' => 'be-bap jazz',
            'price' => '10'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'https://jazzcollector.com/blog/wp-content/uploads/2013/10/ted.jpg',
            'title' => 'sax',
            'description' => 'sax and dog',
            'price' => '10'
        ]);
        $product->save();

        $product = new Product([
            'imagePath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZkwWWGnfWZDj2-t7LiZ5TDk9eXhDj0pgyppi_6Y0X010MUwwkDA',
            'title' => 'kind of blue',
            'description' => 'mails best',
            'price' => '10'
        ]);
        $product->save();
    }
}
