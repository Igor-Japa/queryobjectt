<?php
//carrega as classes necessárias

include_once 'texpression.class.php';
include_once 'tfilter.class.php';

//criAR UM FILTRO POR DATA(STRING)

$filter1= new tfilter('data', '=','2007-06-02');
echo $filter1->dump();
echo"<br>\n";

//cRIA UM FILTRO PRO SALARIO (INTEGER)

$filter2= new tfilter('salario', '>',3000);
echo $filter2->dump();
echo"<br>\n";

//cria um filtro por genero (array)
$filter3= new tfilter('genero','IN',array("M","F"));
echo $filter3->dump();
echo"<br>\n";

//cria um filtro por contrato(NULL)
$filter4= new tfilter('contrato','IS NOT', NULL) ;
echo $filter4->dump();
echo"<br>\n";

//cria um filtro por ativo (booleano)
$filter5= new tfilter('ativo','=', TRUE) ;
echo $filter5->dump();
echo"<br>\n";

?>