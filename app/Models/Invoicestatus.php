<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoicestatus extends Model
{
    use HasFactory;
    protected $table = 'invoicestatuses';
   
    public function trackstatus()
    {
        return $this->belongsTo(Trackstatus::class);
    }
    
}
