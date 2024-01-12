<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class data extends Model
{
    use HasFactory;
    protected $table = 'tb_m_project';
    protected $fillable = ['project_name', 'client_id', 'Project_status'];
    public $timestamps = false;

    public function getCreatedAtAttribute($project_start){
        return Carbon::parse($this->attributes[$project_start])
        ->translatedFormat('1, d F Y');
    }

    public function client(){
        return $this->hasMany(data::class, 'client_id', 'id');
    }
}
