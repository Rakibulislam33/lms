<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [

        'due_date',
        'paid_daate',
        'user_id'
    ];


    public function items() {
        return $this->hasMany(InvoiceItem::class);
    }
}
