<?php
namespace Core;
/**
 * Description of ConfigController
 *
 * @author paulo
 */
class ConfigController {
    private $url;

    public function __construct()
    {
       if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
           $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
       } else {
           $this->url = "home";
       }
    }
    
    public function carregar(){

        $urlController = ucwords($this->url);
        $classe = "\\App\\sts\\Controllers\\" . $urlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
        
    }   
}
