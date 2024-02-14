<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {
            $project = new Project();
            $project->title = $faker->unique()->name();
            $project->author = $faker->unique()->name();
            $project->project_image = $faker->imageUrl();
            $project->content = $faker->text();
            $project->date = $faker->date();
            $project->save();
        }
    }
}
