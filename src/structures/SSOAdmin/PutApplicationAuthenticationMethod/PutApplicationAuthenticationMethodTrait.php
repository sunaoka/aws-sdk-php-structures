<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAuthenticationMethod;

trait PutApplicationAuthenticationMethodTrait
{
    /**
     * @param PutApplicationAuthenticationMethodRequest $args
     * @return void
     */
    public function putApplicationAuthenticationMethod(PutApplicationAuthenticationMethodRequest $args)
    {
        parent::putApplicationAuthenticationMethod($args->toArray());
    }
}
