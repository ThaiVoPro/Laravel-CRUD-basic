<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computer;
use Faker\Factory as Faker;
class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $f = Faker::create();
        for($i=0;$i<50;$i++){
            Computer::create([
                'computer_name' => $f->name(),
                'model' => $f->text(100),
                'operating_system' => $f->text(50),
                'processor' => $f->text(50),
                'memory' => $f->numberBetween(4,32),
                'available' => $f ->boolean,
                
            ]);
        }
    }
}
