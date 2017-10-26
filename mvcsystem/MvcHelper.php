<?php

namespace mvcsystem;


class MvcHelper
{
    public static function rootDir($appDirectory =''){
        return __DIR__.'/../'.$appDirectory.'/';
    }

}