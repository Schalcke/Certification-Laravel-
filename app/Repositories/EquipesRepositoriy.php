<?php

namespace App\Repositories;

use App\Equipes;

class EquipesRepository
{
    protected $equipes;

    public function __construct(equipes $equipes)
	{
		$this->equipes = $equipes;
	}

	private function save(equipes $equipes, Array $inputs)
	{
		$equipes->titre = $inputs['nomEquipe'];
        $equipes->contenu = $inputs['nomCoach'];
        $equipes->contenu = $inputs['nombreJoueur'];	
		$equipes->user_id = $inputs['equipe_id'];
		$equipes->date_end = $inputs['nomStadeEquipe'];

		$equipes->save();
	}

	public function store(Array $inputs)
	{
		$this->equipes->create($inputs);
		$equipes = new $this->equipes;		
		$this->save($equipes, $inputs);

		return $equipes;
	}

	public function getById($id)
	{
		return $this->equipes->findOrFail($id);
	}

}