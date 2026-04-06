<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationAuthenticationMethod;

trait GetApplicationAuthenticationMethodTrait
{
    /**
     * @param GetApplicationAuthenticationMethodRequest $args
     * @return GetApplicationAuthenticationMethodResponse
     */
    public function getApplicationAuthenticationMethod(GetApplicationAuthenticationMethodRequest $args)
    {
        $result = parent::getApplicationAuthenticationMethod($args->toArray());
        return new GetApplicationAuthenticationMethodResponse($result->toArray());
    }
}
