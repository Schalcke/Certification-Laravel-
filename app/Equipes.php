<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipes extends Model
{
    protected $table = 'equipes';
    
    public $timestamps = false;

    protected $fillable = ['nomEquipe','nomCoach','nombreJoueur', 'equipe_id', 'nomStadeEquipe'];

    /*
    public function user()
	{
		return $this->belongsTo('App\User');

    }
    */
}
