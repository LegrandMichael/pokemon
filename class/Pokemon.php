<?php

class Pokemon {

	private $nom;
	private $pv;
	private $type;
	private $niveau;
	private $faiblesse;
	private $resistance;
	private $atk1;
	private $atk2;
	private $degatsAtk1;
	private $degatsAtk2;
	private $mort;

	public function __construct(){

	}

	public function evoluer(){

	}

	public function attaquer(){

	}

	public function estMort($pv) {
		$this->pv=$pv;
		if ($pv <= 0) {
			echo "<div>Votre pokemon est mort, ammenez le vite au centre le plus proche</div><br>";
		} else {
			echo "<div>Le pokemon a survécu avec ".$this->pv." PV</div>";
		}
		
	}

}

?>