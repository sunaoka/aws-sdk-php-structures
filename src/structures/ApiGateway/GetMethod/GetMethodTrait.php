<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetMethod;

trait GetMethodTrait
{
    /**
     * @param GetMethodRequest $args
     * @return GetMethodResponse
     */
    public function getMethod(GetMethodRequest $args)
    {
        $result = parent::getMethod($args->toArray());
        return new GetMethodResponse($result->toArray());
    }
}
