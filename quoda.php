<?php 

require_once 'simplehtmldom_1_5/simple_html_dom.php';


ini_set('display_errors', 0 );
error_reporting(0);




	$html = file_get_html('http://www.cnpq.br/web/guest/licitacoes');




$descricao = array();
$resultados = array();

foreach($html->find('.resultado-licitacao') as $element) {
      


foreach($element->find('a') as $link) 
       $dados [] = array($link->href);

	
	}


foreach($html->find('.licitacoes') as $element) 
{


	
foreach($element->find('h4') as $h4) 
{

}



foreach($element->find('.data_licitacao') as $spn2) 
{

}


foreach($element->find('.cont_licitacoes') as $ul) 
{
      
}



	
	





$descricao []  = array("titulo" => $h4->plaintext,"abertura" => $spn2->plaintext, "descricao" => $ul->plaintext);
 
}


$resultados [] = array("licitacoes" => $descricao, "links" => $dados);




echo json_encode($resultados);
















?>


          

