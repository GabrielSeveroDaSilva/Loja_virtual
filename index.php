<?php

require './lib/autoload.php';

$smarty = new Template();
Rotas::get_Pagina();


//valores para o templete

$smarty->assign('NOME', 'HUGO VASCONCELOS DE FREITAS');

$smarty->display('index.tpl');
