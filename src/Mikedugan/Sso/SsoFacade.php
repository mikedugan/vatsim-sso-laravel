<?php  namespace Sso;

use  \Illuminate\Support\Facades\Facade;

class SsoFacade extends Facade {

    protected static function getFacadeAccessor() { return 'sso'; }
} 
