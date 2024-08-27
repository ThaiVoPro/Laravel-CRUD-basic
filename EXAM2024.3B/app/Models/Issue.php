<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = ['reported_by', 'reported_date', 'description','urgency','status','computer_id'];
    function getComputerName(){
        $c = Computer::where('id', $this->computer_id)->first();
        if ($c == null) {
            return "Nodata found for this computer";
        }
                 return $c->computer_name;
}
}
