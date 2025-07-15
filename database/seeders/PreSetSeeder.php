<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\User\Database\Seeders\DefaultUserSeeder;

class PreSetSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DefaultUserSeeder::class,
        ]);
    }
}
