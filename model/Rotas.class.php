<?php


Class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHome(){
        return Config::SITE_URL . "/" . Config::SITE_PASTA;
    }
    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . "/" . Config::SITE_PASTA;
    }
    static function get_SiteTEMA(){
        return self::get_SiteHome() . "/" . self::$pasta_view;
    }
    static function pag_Carrinho(){
        return self::get_SiteHome() . "/carrimho";
    }

//quando chamamos com o metudo como static não preciso chama a classe
    static function get_Pagina(){

        if(isset($_GET['pag'])){

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);
            /*echo '<pre>'; //só para fomata o var_dump
             var_dump(self::$pag);//para debung
            echo '</pre>';*/

            $pagina = 'controller/' .self::$pag[0] . '.php';    //aque só vai execulta o paramento 0 sea url, encontra esse paramento ela vai trazer a pasta,se pedir alem do paramento 0, o 1 , 2 ele vai trazer o 0 foi o que nos pedimos

            //$pagina = 'controller/' .$_GET['pag'] . '.php';
            //echo $pagina;    //para debug
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
            }
        }
    }
}