<?php

$soap = new SoapClient("https://www.ovh.com/soapi/soapi-re-1.13.wsdl");
    
	$soap_session = $soap->login("pc8418-ovh", "laugier17","fr", false);      
  
  	define('soap_domain_pcp','protectioncivile-paris17.org');
  	
  	
  	$result = $soap->mailingListList($soap_session, soap_domain_pcp);
  	$tab=array();
  	foreach($result as $liste){
  		$tab[]=$liste;
  	}
  	
  	$soap->logout($soap_session);
  	
  	//echo json_encode($tab);
  
?>
