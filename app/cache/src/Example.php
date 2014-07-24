<?php

class Example__AopProxied {

    public function getSomething()
    {

    }

    public function doNothing()
    {

    }

} 
class Example extends Example__AopProxied implements \Go\Aop\Proxy
{


    /**
     *Property was created automatically, do not change it manually
     */
    private static $__joinPoints = array();
    
    
    public function doNothing()
    {
        return self::$__joinPoints['method:doNothing']->__invoke($this);
    }
    
    
    public function getSomething()
    {
        return self::$__joinPoints['method:getSomething']->__invoke($this);
    }
    
}
\Go\Proxy\ClassProxy::injectJoinPoints('Example', unserialize('a:1:{s:6:"method";a:2:{s:12:"getSomething";a:1:{i:0;C:40:"Go\\Aop\\Framework\\MethodBeforeInterceptor":140:{a:1:{s:12:"adviceMethod";a:3:{s:5:"scope";s:6:"aspect";s:6:"method";s:21:"beforeMethodExecution";s:6:"aspect";s:20:"Aspect\\MonitorAspect";}}}}s:9:"doNothing";a:1:{i:0;r:4;}}}'));
