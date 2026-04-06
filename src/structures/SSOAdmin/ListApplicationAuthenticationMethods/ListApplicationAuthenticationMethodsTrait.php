<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAuthenticationMethods;

trait ListApplicationAuthenticationMethodsTrait
{
    /**
     * @param ListApplicationAuthenticationMethodsRequest $args
     * @return ListApplicationAuthenticationMethodsResponse
     */
    public function listApplicationAuthenticationMethods(ListApplicationAuthenticationMethodsRequest $args)
    {
        $result = parent::listApplicationAuthenticationMethods($args->toArray());
        return new ListApplicationAuthenticationMethodsResponse($result->toArray());
    }
}
