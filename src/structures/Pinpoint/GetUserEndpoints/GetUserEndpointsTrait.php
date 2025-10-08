<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetUserEndpoints;

trait GetUserEndpointsTrait
{
    /**
     * @param GetUserEndpointsRequest $args
     * @return GetUserEndpointsResponse
     */
    public function getUserEndpoints(GetUserEndpointsRequest $args)
    {
        $result = parent::getUserEndpoints($args->toArray());
        return new GetUserEndpointsResponse($result->toArray());
    }
}
