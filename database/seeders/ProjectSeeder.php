<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('db.projects');
        foreach ($projects as $project) {
            $newPost = new Project();
            $newPost->image= $project['image'];
            $newPost->title = $project['title'];
            $newPost->body =$project['body'];
            $newPost->user_id = 1;
            $newPost->slug =Str::slug($project['title'], '-');

            $newPost->save();
        }
    }
}
