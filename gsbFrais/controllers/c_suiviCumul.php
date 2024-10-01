<?php
/** @var PdoGsb $pdo */
include 'views/v_sommaire.php';
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'lesuivi' :
        {
            $lesMois=$pdo->getLesMois();
            //var_dump($lesMois);
            $lesCles = array_keys( $lesMois );
            $moisASelectionner = $lesCles[0];


        include("views/v_suivisCumuls.php");
        break;
        }
    case 'cumul' :
        {
            //var_dump($_REQUEST);
            $lstmois = $_REQUEST['lstMois2'];

            $lesMois=$pdo->getLesMois();
            //var_dump($lesMois);
            $lesCles = array_keys( $lesMois );
            $moisASelectionner = $lesCles[0];

            $etp = $pdo->getlescumuls($lstmois, 'ETP');
            $km = $pdo->getlescumuls($lstmois, 'KM');
            $repas = $pdo->getlescumuls($lstmois, 'REP');
            $nuite = $pdo->getlescumuls($lstmois, 'NUI');
            //var_dump($etp);
            include("views/v_suivisCumuls.php");
            break;
        }
    

}