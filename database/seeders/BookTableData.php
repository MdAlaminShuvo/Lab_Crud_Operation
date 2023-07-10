<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'name' => 'jahid hasan',
            'author' => 'priotoma',
            'price' => '1234',
            'isbn' => 'qw',
            'quantity' => '123'
        ]);
    }
}
