<?php

namespace App\Enums;

enum Role: string
{
    case SuperAdmin = 'super-admin';
    case Resepsionis = 'resepsionis';

    public function label(): string
    {
        return match ($this) {
            self::SuperAdmin => 'Super Admin',
            self::Resepsionis => 'Respesionis',
        };
    }

    // public function navigation(): array|string
    // {
    //     return match ($this) {
    //         self::SuperAdmin => [
    //             'dashboard',
    //             'kamar.*',
    //             'fasilitas-kamar.*',
    //             'fasilitas-hotel.*',
    //         ],
    //     }
    // }

    public static function options(): array
    {
        $options = [];
        foreach (self::cases() as $case) {
            $options[] = [
                'id' => $case->value,
                'label' => $case->label(),
            ];
        }

        return $options;
    }
}
