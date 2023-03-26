<?php

namespace App\controller\pages;

use \App\utils\View;

class Page{
   
    /**
    * Método responsável por renderizar o cabeçalho da página
    * @return string 
    */
   private static function getHeader(){
        return view::render('pages/header');
   }
   
   /**
    * Método responsável por renderizar o rodapé da página
    * @return string 
    */
    private static function getFooter(){
        return view::render('pages/footer');
    }
    
   /** 
    * Método responsável por retornar o conteúdo (view) da nossa página genérica
    * @return string
    */
    public static function getPage($title,$content){
        return View::render('pages/page',[
        'title' => $title,
        'header' => self::getHeader(),
        'content' => $content, 
        'footer' => self::getFooter()    
        ]);
    }

}
