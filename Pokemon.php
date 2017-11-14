<?php

class Pokemon {

	private $nom;
	private $pv = 0;
	private $type;
	private $niveau;
	private $faiblesse;
	private $resistance;
	private $atk1;
	private $atk2;
	private $degatsAtk1;
	private $degatsAtk2;
	private $mort;

	public function evoluer(){

	}

	public function attaquer(){

	}

	public function estMort($pv,$mort) {
		$this->pv=$pv;
		$this->mort=$mort;
		if ($pv <= 0) {
			return $mort=true;
			echo "<div>Votre pokemon est mort, ammenez le vite au centre le plus proche</div>";
		} else {
			echo "<div>Le pokemon a survécu avec ".$this->pv." PV</div>";
		}
		
	}

}

?>