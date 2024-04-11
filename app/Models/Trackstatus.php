<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trackstatus extends Model
{
    use HasFactory;
    protected $table = 'trackstatuses';
    public function invoicestatus(){
        return $this->hasMany(Invoicestatus::class);
    }
}
