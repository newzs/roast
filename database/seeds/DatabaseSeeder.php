<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //这两个方法是在做数据填充的时候对模型字段的一种保护措施
        Model::unguard();//unguard 负责解除自动填充操作限制，reguard 负责恢复限制

        $this->call(UsersTableSeeder::class);

        $this->call(StatusesTableSeeder::class);

        Model::reguard();
    }
}
