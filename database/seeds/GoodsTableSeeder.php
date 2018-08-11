<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Good::class)->times(10)->create();
//        DB::table('goods')->insert([
//            'goods_sn' => 10001,
//            'goods_name' => '加多宝凉茶',
//            'prize' => 3.5
//        ]);
    }
}
