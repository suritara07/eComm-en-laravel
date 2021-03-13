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
        DB::table('products')->insert(
        [
            [
                'name'=>'Oppo mobile',
                "price"=>"1200",
                "description"=>"A smartphone with 4gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://ae01.alicdn.com/kf/HTB1Q_xwQXXXXXbJXFXXq6xXFXXXP/OPPO-OPPO-A57-Android-6-0-Eight-nuclear-TD-LTE-3RAM-32ROM-Smart-phone.jpg"
            ],
            [
                'name'=>'Sumsung mobile',
                "price"=>"3200",
                "description"=>"A smartphone with 4gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://ae01.alicdn.com/kf/HTB1fcVbPpXXXXaQXpXXq6xXFXXXp/2016-New-Original-Samsung-Galaxy-On5-G5700-Cell-Phone-5-0-Dual-SIM-3G-RAM-32G.jpg"
            ],
            [
                'name'=>'Sony mobile',
                "price"=>"4200",
                "description"=>"A smartphone with 4gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://th.bing.com/th/id/OIP.kTFBhhFvkmDs7ayD4qcKgAHaFB?pid=ImgDet&rs=1"
            ],
            [
                'name'=>'iphone mobile',
                "price"=>"5200",
                "description"=>"A smartphone with 4gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://crdms.images.consumerreports.org/prod/products/cr-legacy/production/products/testedmodel/profile/cr/jpg/598/387499-smartphones-apple-iphone7.jpg"
            ],
            [
                'name'=>'ipad mobile',
                "price"=>"9200",
                "description"=>"A smartphone with 4gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://i.pinimg.com/originals/5b/1c/ed/5b1ced92befd406e374be6e429c79b32.jpg"
            ]
        ]
    );
    }
}
