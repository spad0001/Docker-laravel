<?php

namespace Database\Seeders;

use App\Models\Foo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foo::factory(50)->create(); //Calls the factory and creates 50 entries.
    }
}
