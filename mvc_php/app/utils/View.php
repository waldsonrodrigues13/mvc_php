<?php

namespace App\utils;

class View {

    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';          
    }
       
    /**
     * Método responsável por retornar o conteúdo renderizado de uma view 
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string 
     */
    public static function render($view, $vars = []) {
        //CONTEÚDO DA VIEW
        $contentView = self::getContentView($view);
        
        // MEU DEBUG
        /**
        echo "<pre>";
        print_r($vars);
        echo "</pre>"; exit;
        */

        //CHAVES DO ARRAY DE VARIÁVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';        
        },$keys);
        
        //MEU DEBUG
        /**
        echo "<pre>";
        print_r($keys);
        echo "</pre>"; exit;
        */

        //RETORNA O CONTEÚDO RENDERIZADOS
        //return $contentView;
        return str_replace($keys,array_values($vars),$contentView); 
    }

}