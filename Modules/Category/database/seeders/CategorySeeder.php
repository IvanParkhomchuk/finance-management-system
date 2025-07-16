<?php

namespace Modules\Category\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Category\Models\Category;
use Modules\User\Models\User;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Category::factory()
                ->count(5)
                ->state(['user_id' => $user->id])
                ->create();
        }
    }
}
