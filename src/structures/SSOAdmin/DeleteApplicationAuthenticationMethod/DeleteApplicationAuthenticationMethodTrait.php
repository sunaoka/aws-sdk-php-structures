<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteApplicationAuthenticationMethod;

trait DeleteApplicationAuthenticationMethodTrait
{
    /**
     * @param DeleteApplicationAuthenticationMethodRequest $args
     * @return void
     */
    public function deleteApplicationAuthenticationMethod(DeleteApplicationAuthenticationMethodRequest $args)
    {
        parent::deleteApplicationAuthenticationMethod($args->toArray());
    }
}
