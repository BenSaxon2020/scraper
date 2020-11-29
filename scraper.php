<?php
// $html = file_get_contents('https://stackoverflow.com/questions/21741557/take-text-from-another-website-through-php');

$html = file_get_contents('https://www.amazon.co.uk/dp/B07X37DT9M/ref=gw_uk_desk_mso_vicc_owl?pf_rd_r=7BJSBVZJJT8JCYGZ5RQG&pf_rd_p=c981c9b3-d77e-4e0b-9edf-f42e59718556'); //get the html returned from the following url


$doc1 = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$doc1->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$xmen = new DOMXPath($doc1);

	//get all the h2's with an id
	$xmen_11 = $xmen->query('//span[@id="price_inside_buybox"]');

	if($xmen_11->length > -1){
		foreach($xmen_11 as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
}

