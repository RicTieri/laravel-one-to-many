<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            'Front-end',
            'Back-end',
            'Full-stack',
        ];

        foreach ($types as $type) {
            $type = new Type();
            $type->name = $type;
            $type->color = $faker->unique()->hexColor();
            $type->save();
        }
    }
}
