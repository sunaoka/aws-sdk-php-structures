<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetUserEndpoint;

trait GetUserEndpointTrait
{
    /**
     * @param GetUserEndpointRequest $args
     * @return GetUserEndpointResponse
     */
    public function getUserEndpoint(GetUserEndpointRequest $args)
    {
        $result = parent::getUserEndpoint($args->toArray());
        return new GetUserEndpointResponse($result->toArray());
    }
}
