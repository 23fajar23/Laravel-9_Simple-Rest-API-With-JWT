<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category_product;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Category_product::create([
            'name' => 'snack'
        ]);

        Category_product::create([
            'name' => 'drink'
        ]);

        Category_product::create([
            'name' => 'food'
        ]);

        $category_id = Category_product::first()->id;

        Product::create([
            'product_category_id' => $category_id,
            'name' => 'Oreo',
            'price' => 7000,
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/MTA-35563760/oreo_oreo_biscuit_133gr_pak_full02_netmv3vz.png'
        ]);

        Product::create([
            'product_category_id' => $category_id,
            'name' => 'Mie Gelas',
            'price' => 14000,
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//100/MTA-53509149/mie-gelas_mie-gelas-rencengan-isi-10-pcs-all-varian-rasa_full01.jpg'
        ]);

    }
}
