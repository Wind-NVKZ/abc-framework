<?php

namespace ABC\Abc\Core;

use ABC\Abc\Components\Dic\DiC;

/** 
 * Сервис-локатор
 * 
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2015
 * @license http://abc-framework.com/license/ 
 */   
class ServiceLocator extends DiC
{ 
    /**
    * Проверяет наличие сервиса в хранилище
    *
    * @param string $ServiceId
    *
    * @return void
    */       
    public function checkService($ServiceId)
    {
        $ServiceId = $this->validateService($ServiceId);
        return isset($this->ServiceStorage[$ServiceId]);
    }   
}
