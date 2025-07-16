<?php

namespace Modules\Category\Enums;

enum CategoryType: string {
    case INCOME = 'income';
    case EXPENSE = 'expense';

    public static function getLabel(self $case): string
    {
        return match ($case) {
            self::INCOME => 'Active',
            self::EXPENSE => 'Inactive',
        };
    }
}
