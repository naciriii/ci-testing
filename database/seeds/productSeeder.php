<?php

use Illuminate\Database\Seeder;
use App\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new Product;
        $product->name='test prod';
        $product->save();
    }
}
