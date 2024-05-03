<?php

namespace App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manu extends Model
{
    use HasFactory;


    public function Tecs(){
return $this->hasMany(Tec::class);

    }
}
