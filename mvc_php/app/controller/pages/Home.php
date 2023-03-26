<?php

namespace App\controller\pages;

use \App\utils\View;
use \App\model\entity\Organization;

class Home extends Page{
    /** 
    * Método responsável por retornar o conteúdo (view) da nossa home
    * @return string
    */
    public static function getHome(){
        $obOrganization = new Organization;
        /** 
        echo "<pre>";
        print_r($obOrganization);
        echo "</pre>"; exit;
        */

        //VIEW DA HOME
        $content = View::render('pages/home',[
        'name' => $obOrganization->name,
        'description' => $obOrganization->description,
        'site' => $obOrganization->site
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('WDEV - Canal - Home', $content); 
    }
}
