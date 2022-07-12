<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function __construct()
    {
        $this->run();
    }
    
    public function run()
    {
        //
        News::factory()->count(10)->create();
    }
}
