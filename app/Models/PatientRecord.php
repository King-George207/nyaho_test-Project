<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecord extends Model
{
    use HasFactory;
    protected $table = 'patient_record';
    protected $fillable = ['user_id', 'gender', 'phone', 'name', 'email'];
    public function patient()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
