<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetMethodResponse;

trait GetMethodResponseTrait
{
    /**
     * @param GetMethodResponseRequest $args
     * @return GetMethodResponseResponse
     */
    public function getMethodResponse(GetMethodResponseRequest $args)
    {
        $result = parent::getMethodResponse($args->toArray());
        return new GetMethodResponseResponse($result->toArray());
    }
}
