<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Category\Database\Seeders\CategorySeeder;
use Modules\User\Database\Seeders\DefaultUserSeeder;
use Modules\User\Database\Seeders\UserSeeder;

class PreSetSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DefaultUserSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
