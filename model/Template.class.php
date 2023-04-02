<?php

Class Template extends Smarty{
     
    function __construct(){ // esso é um epaço, e esso é duas linha se não vai dar erro

        parent:: __construct();
// tive que mudar $smarty para $this
        $this->setTemplateDir('view/'); //mostra o cominho,  que deve execultar quando tpl for chamado por o "display" essse deve ser primeiro
        $this->setCompileDir('view/compile/');   //vai criar uma pasta compile e vai entroduzir todas o que for compilado
        $this->setCacheDir('view/cache/');  //vai criar uma pasta cache e vai entroduzir todas os cache */

    }
        
    
}