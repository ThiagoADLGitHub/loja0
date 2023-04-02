<?php
//isso mostra todos os cominho das bibliote adicionada o parte do composer
//se eu não usarse o composer para add as bibliotecas. eu teria que mostra os caminhos de todas com o require
// e com composer so preciso add esse codigo de uma linha que já conectar tosdas as biblioteca add pelo mesmo .
//fazendo a querire do outload, que vai chamar todas as bibliotecas, e deixando o codigo mais enchuto
require './lib/autoload.php'; 
//require './lib/phpmailer/phpmailer/src/PHPMailer.php'; 
//aqui eu criei uma variavel apartir da biblioteca PHPMAiler,
//$email = new PHPMailer(); //estar dando erro
/*esse comanto para classe template
$smarty = new Smarty(); 

/*eu vou comentar este codigo, e criar uma class como mesto pois ele vai ser muito chamado e desse geito vai ficar cansativo,
vai se chamar Tamplate.class.php   . esse e o codigo de configuração, iria ser cansativo eu fazer esso para todas o paginas que eu chamar 
$smarty->setTemplateDir('view/'); //mostra o cominho,  que deve execultar quando tpl for chamado por o "display" essse deve ser primeiro
$smarty->setCompileDir('view/compile/');   //vai criar uma pasta compile e vai entroduzir todas o que for compilado
$smarty->setCacheDir('view/cache/');  //vai criar uma pasta cache e vai entroduzir todas os cache */

$smarty = new Template();
Rotas::get_pagina();

//valor para templete
$smarty->assign('NOME', 'THIAGO ANTONIO'); //vai fazer com quer se o nome foor chamado na view{$NOME}, vai aprecer: THIAGO ANTONIO
//echo Rotas::get_SiteHome(). '<br>';
echo Rotas::pag_Carrinho(). '<br>';
/*aqui vai chama. ESSE COMANDO DE CHAMAR, TEM QUE SER O ULTIMO DEPOS DE TER FEITO TODAS AS CONFIGURAÇÕES,
SE NÃO VAI OCASIONAR UM ERRO*/
$smarty->display('index.tpl'); 



?>