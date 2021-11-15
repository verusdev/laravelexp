<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $dates = ['date_event'];
    protected $fillable = [
        'date_event',
        'user_id',
        'description',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
