<?php

    $uri =  $authority.'/application/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $applications= $obj->applications;


    $uri =  $authority.'/acteur/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $acteurs= $obj->acteur;
    

    $uri =  $authority.'/unite_organisation/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $unite_organisations= $obj->unite_organisation;
    
    
    
    
    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/role/modifier/model/recuperer_un.php'); 
        }
    else
        {
            echo "verifier le code sources ";  
        }

   


?>