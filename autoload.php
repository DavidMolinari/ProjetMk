<?php
class AutoLoader
{
    static function Register(){
        spl_autoload_register(array(__CLASS__, 'AutoLoad'));
    }
    static function AutoLoad($class_name){
        require 'Utils/' . $class_name .  '.php';
    }
}