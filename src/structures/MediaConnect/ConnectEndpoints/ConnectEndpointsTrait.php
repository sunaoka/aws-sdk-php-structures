<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ConnectEndpoints;

trait ConnectEndpointsTrait
{
    /**
     * @param ConnectEndpointsRequest $args
     * @return ConnectEndpointsResponse
     */
    public function connectEndpoints(ConnectEndpointsRequest $args)
    {
        $result = parent::connectEndpoints($args->toArray());
        return new ConnectEndpointsResponse($result->toArray());
    }
}
