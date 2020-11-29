<?php
$html = file_get_contents('[<enter url>]'); //get the html returned from the following url


$doc1 = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is returned

	$doc1->loadHTML($html);
	libxml_clear_errors(); //remove errors 
	
	$xmen = new DOMXPath($doc1);

	//get all the h2's with an id
	$xmen_11 = $xmen->query('//span[@id="<enter html element id you want>"]');

	if($xmen_11->length > -1){
		foreach($xmen_11 as $row){
			echo $row->nodeValue . "<br/>";
        }
    }
    else{
        echo "suck ur mum";
    }
}

