<?php
	require_once("modele.class.php"); 
	$unModele = new Modele("localhost:8889", "androidparis2024", "benahmed", "benahmed"); 

	$unModele->setTable("evenement"); 
	$lesEvenements = $unModele->selectAll("*"); 
	$tab = array();
	foreach ($lesEvenements as $unEvent) {
		$ligne = array("idevenement"=>$unEvent['idevenement'],
				"designation"=>$unEvent['designation'], 
				"dateevent"=>$unEvent['dateEvent'], 
				"heureevent"=>$unEvent['heureEvent'], 
				"lieu"=>$unEvent['lieu'], 
				"nbplaces"=>$unEvent['nbPlaces'], 
				"prix"=>$unEvent['prix']);
		$tab[] = $ligne; 
	}
	print(json_encode($tab));
?>