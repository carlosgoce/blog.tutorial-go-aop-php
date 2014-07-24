<?php

class Cliente__AopProxied {

    public function comprar($articulo)
    {

    }

} 
class Cliente extends Cliente__AopProxied implements \Go\Aop\Proxy
{


    /**
     *Property was created automatically, do not change it manually
     */
    private static $__joinPoints = array();
    
    
    public function comprar($articulo)
    {
        return self::$__joinPoints['method:comprar']->__invoke($this, array($articulo));
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Cliente', unserialize('a:1:{s:6:"method";a:1:{s:7:"comprar";a:1:{i:0;C:39:"Go\\Aop\\Framework\\MethodAfterInterceptor":136:{a:1:{s:12:"adviceMethod";a:3:{s:5:"scope";s:6:"aspect";s:6:"method";s:20:"afterMethodExecution";s:6:"aspect";s:17:"Aspect\\MailAspect";}}}}}}'));
