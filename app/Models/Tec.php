<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Tec extends Model
{
    use HasFactory;


    public function Manu(){
        return $this ->belongsTo(Manu::class);
    }
}
