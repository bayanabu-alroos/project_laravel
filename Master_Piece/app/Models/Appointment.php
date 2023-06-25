<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;


    protected $fillable = [
        'date_appointment',
        'start_time',
        'end_time',
        'user_id',
        'room_id',
        'session_id'

    ];

    protected $table = 'appointment';

    public function users(){
        return $this->belongsTo(User::class ,'user_id','id');
    }
    public function sessions(){
        return $this->belongsTo(Session::class ,'sessions_id','id');
    }

    public function rooms(){
        return $this->belongsTo(Room::class ,'rooms_id','id');
    }
}
