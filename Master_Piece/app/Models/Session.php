<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
    'service_id',
    'room_id',
    'name_session',
    'cost_session',
    'detail_session',
    'session_duration'
];

    public function services(){
        return $this->belongsTo(Service::class ,'service_id','id');
    }

    public function rooms(){
        return $this->belongsTo(Room::class ,'room_id','id');
    }
}
