<?php

namespace mvcsystem;

use controller\HomeController;
use Exception;

class RequestDirector
{
    public function httpRequest(){
        try{
            $request = $_SERVER['REQUEST_URI'];
            $requestArr = preg_split('@/@', $request, NULL, PREG_SPLIT_NO_EMPTY);
            $count = count($requestArr);
            switch($count){
                case 0:
                    //Corigeer foutieve URL / naar Home/Index
                    header('location: /Home/Index');
                    break;
                case 1:
                    //Corigeer foutieve URL /Home of /Index naar /Controller/Method
                    if(method_exists(HomeController::class, $requestArr[0])){
                        header('location /Home/'.$requestArr[0]);
                        return;
                    }
                    $className = 'controller\\'.ucwords($requestArr[0].'Controller');
                    if(class_exists($className)){
                        if(method_exists($className, 'index')){
                            header('location: /'.$requestArr[0].'/index');
                            return;
                        }
                    }
                    break;
                case 2:
                    //Verwerk correcte URL
                    $className = 'controller\\'.ucwords($requestArr[0].'Controller');
                    if(class_exists($className)){
                        $obj = new $className($this);
                        if(method_exists($className, $requestArr[1])){
                            $obj->{$requestArr[1]}();
                        }
                    }
                    break;
                default:
                    $this->handleError(404);
                    break;
            }
        }catch(Exception $e){
            $this->handleError(500, $e->getMessage());
        }
        $this->handleError(404);
    }

    public function handleError($statuscode = 500, $message = ''){
       try{
           $loadAndDie = function($path) use ($message) {
               ob_start();
               include($path);
               $output = ob_get_contents();
               ob_end_clean();
               die($output);
           };
           if(file_exists(MvcHelper::rootDir('view').'/_Error/'.$statuscode.'.php')){
               $loadAndDie(MvcHelper::rootDir('view').'/_Error/'.$statuscode.'.php');
           }
           if($statuscode != 500 && file_exists(MvcHelper::rootDir('view').'/_Error/500.php')){
               $loadAndDie(MvcHelper::rootDir('view').'/_Error/500.php');
           }else{
                throw Exception("500 page not found");
           }

       }catch(Exception $e){
           die('500 - Server error! ('.$e->getMessage().')');
       }
    }
}