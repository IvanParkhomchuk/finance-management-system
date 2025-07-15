<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Enums\Seeder\DefaultUser;
use Modules\User\Models\User;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::find(DefaultUser::DEFAULT_USER_ID);

        if ($user !== null) {
            $this->command->warn('user already exists, skipping.');

            return;
        }

        User::factory()
            ->forDefaultUser(
                DefaultUser::DEFAULT_USER_ID,
                DefaultUser::DEFAULT_NAME,
                DefaultUser::DEFAULT_EMAIL,
                DefaultUser::DEFAULT_PASSWORD,
            )
            ->create();
    }
}
