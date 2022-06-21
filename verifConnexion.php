<?php
	require_once("modele.class.php"); 
	$unModele = new Modele("localhost:8889", "androidparis2024", "benahmed", "benahmed"); 
	if (isset ($_REQUEST["email"]) and isset ($_REQUEST["mdp"]) ){
		$where = array("email"=>$_REQUEST["email"], 
					"mdp"=>$_REQUEST["mdp"]);

		$unModele->setTable ("user");

		$unUser = $unModele->selectwhere("*", $where); 
		if($unUser == null){
			print("[]"); 
		}else {
			$tab=array("iduser"=>$unUser['iduser'], 
				"nom"=>$unUser['nom'], 
				"prenom"=>$unUser['prenom'],
				"email"=>$unUser['email'],
				"mdp"=>$unUser['mdp'], 
				"tel"=>$unUser['tel']
			);
			print("[".json_encode($tab)."]"); 
		}
	}else {
		print("[]"); 
	}
	 
?>





