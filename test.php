<?php

$maConnexion = new PDO('mysql:host=localhost;dbname=f1_cagnon;charset=utf8','ec', 'ec');


 $_reqType = $_SERVER['REQUEST_METHOD'];
if (isset($_SERVER['PATH_INFO'])){
    $req_path=$_SERVER['PATH_INFO'];
    $req_data = explode("/",$req_path);
   // print_r($req_data);
    
    //echo "</br>";
   //echo $_reqType;
    
    
    
}
if ( $_reqType=='GET')
{
    //-------------------------------Pilote/nom-----------------------------------------------//
    /*if(isset ($req_data[1]) && $req_data[1]=='pilote') // isset permet de savoir que dans Req_data[1] il y a quelque chosse et sa le compare a pilote si il y a pilote alors
    {
        $req = "SELECT * FROM pilote WHERE nom=?";
        $reqpreparer=$maConnexion->prepare($req);
        $tableauDeDonnees=array($req_data[2]);
        $reqpreparer->execute($tableauDeDonnees);
        $reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
        print_r($reponse);
    }
    //-------------------Circuit/nom-==Affiche--Tous-Les-Circuit || Circuit-Monza-Affiche-le-circuit-----------------------------//
    if((isset($req_data[1]) && $req_data[1]=='circuit')   &&  (isset($req_data[2]) && $req_data[2]=='nom')) // isset permet de savoir que dans Req_data[1] il y a quelque chosse et sa le compare a pilote si il y a pilote alors
    {
        $req = "SELECT * FROM circuit WHERE 1 ";
        $reqpreparer=$maConnexion->prepare($req);
        $tableauDeDonnees=array();
        $reqpreparer->execute($tableauDeDonnees);
        $reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
        print_r($reponse);
    }
    //-------------------------------Mesure/Id-Pilote------------------------------------------//
    if((isset ($req_data[1]) && $req_data[1]=='mesure') && (isset($req_data[2])))
    {
        $req = "SELECT * FROM mesure WHERE pilote_id=?";
        $reqpreparer=$maConnexion->prepare($req);
        $tableauDeDonnees=array($req_data[2]);
        $reqpreparer->execute($tableauDeDonnees);
        $reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
        print_r($reponse);
    }
    //-------------------------------Mesure/vitesse------------------------------------------//
    if(isset ($req_data[2]) && $req_data[2]=='vitesse')
    {
        $req = "SELECT vitesse FROM mesure ";
        $reqpreparer=$maConnexion->prepare($req);
        $tableauDeDonnees=array();
        $reqpreparer->execute($tableauDeDonnees);
        $reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($reponse));
    }
    //-------------------------------Circuit-Pays-Ou-Nom------------------------------------------//
    if(isset ($req_data[1]) && $req_data[1]=='circuit' && isset($req_data[2]))
    {
        $req = "SELECT * FROM circuit WHERE nom=?";
        $req2 = "SELECT * FROM circuit WHERE pays=?";
        $reqpreparer=$maConnexion->prepare($req);
        $reqpreparer2=$maConnexion->prepare($req2);

        $tableauDeDonnees=array($req_data[2]);

        $reqpreparer->execute($tableauDeDonnees);
        $reqpreparer2->execute($tableauDeDonnees);

        $reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
        $reponse2=$reqpreparer2 ->fetchAll(PDO::FETCH_ASSOC);
        print_r($reponse);
        if($reponse2&& $req_data[2]=='pays'){print_r($reponse2);}
    }
    //-------------------------------Date-Debut--Date-Fin------------------------------------------//
    if(isset($req_data[2]) && isset($req_data[3])
       && strtotime($req_data[2]) && strtotime($req_data[3])) //--Le StrToTime=String to time sa convertie un string en time et dans notre condition sa vérifié si le format est bon sécurité
    {
        $instant = $req_data[2];
        $req = "SELECT * FROM mesure WHERE instant between ? and ?";
        $reqpreparer=$maConnexion->prepare($req);
        $tableauDeDonnees=array($req_data[2],$req_data[3]);
        $reqpreparer->execute($tableauDeDonnees);
        $reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
        print_r($reponse);
    }*/
    //-----------------------------Mesure--------------------------------//
    if(!isset ($req_data[2]))
    {
        $req = "SELECT instant,vitesse,regime FROM mesure ";
        $reqpreparer=$maConnexion->prepare($req);
        $tableauDeDonnees=array();
        $reqpreparer->execute($tableauDeDonnees);
        $reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
        print_r(json_encode($reponse));
    }
}


/*$req = "SELECT * FROM pilote";
$reqpreparer=$maConnexion->prepare($req);
$tableauDeDonnees=array() ;
$reqpreparer->execute($tableauDeDonnees);
$reponse=$reqpreparer ->fetchAll(PDO::FETCH_ASSOC);
$reqpreparer->closeCursor();
print_r($reponse);

*/
?>