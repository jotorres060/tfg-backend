<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'name' => 'Coding',
            'state' => 'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'name' => 'Eating',
            'state' => 'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'name' => 'Listening music',
            'state' => 'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'name' => 'Studying',
            'state' => 'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'name' => 'Reading',
            'state' => 'Inactive',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'name' => 'Playing',
            'state' => 'Inactive',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tasks')->insert([
            'name' => 'Sleeping',
            'state' => 'Inactive',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
