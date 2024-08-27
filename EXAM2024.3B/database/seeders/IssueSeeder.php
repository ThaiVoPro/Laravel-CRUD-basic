<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Computer;
use App\Models\Issue;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $f = Faker::create();
        $cid = Computer::pluck('id');
        for ($i = 0; $i < 50; $i++) {
            Issue::create([
                'computer_id' => $cid->i + 1,
                'reported_by' => $f->text(50),
                'reported_date' => $f->dateTime(),
                'description' => $f->text(),
                'urgency' => $f->randomElement(['Low', 'Medium', 'High']),
                'status' => $f->randomElement(['Open', 'In Progress', 'Resolved']),

            ]);
        }
    }
}
