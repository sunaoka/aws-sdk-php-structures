<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContactMethods;

trait GetContactMethodsTrait
{
    /**
     * @param GetContactMethodsRequest $args
     * @return GetContactMethodsResponse
     */
    public function getContactMethods(GetContactMethodsRequest $args)
    {
        $result = parent::getContactMethods($args->toArray());
        return new GetContactMethodsResponse($result->toArray());
    }
}
