<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jobeet
 *
 * @author ayoub
 */
class Jobeet {
    //put your code here
    
    static public function slugify($text){
        $text = preg_replace('/\W+/', '-', $text);
        $text = strtolower(trim($text, '-'));
        
        return $text;
        
    }
}
