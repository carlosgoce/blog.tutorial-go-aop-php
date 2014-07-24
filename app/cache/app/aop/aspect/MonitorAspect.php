<?php

namespace Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\FieldAccess;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\After;
use Go\Lang\Annotation\Before;
use Go\Lang\Annotation\Around;
use Go\Lang\Annotation\Pointcut;

/**
 * Monitor aspect
 */
class MonitorAspect implements Aspect
{

    /**
     * Method that will be called before real method
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("execution(public Cliente->comprar(*))")
     */
    public function beforeMethodExecution(MethodInvocation $invocation)
    {
        $argumentos = $invocation->getArguments();
        $articulo   = reset($argumentos);

        echo 'Un cliente ha comprado: ' . $articulo;
    }
}