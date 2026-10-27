<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DisconnectEndpoints;

trait DisconnectEndpointsTrait
{
    /**
     * @param DisconnectEndpointsRequest $args
     * @return DisconnectEndpointsResponse
     */
    public function disconnectEndpoints(DisconnectEndpointsRequest $args)
    {
        $result = parent::disconnectEndpoints($args->toArray());
        return new DisconnectEndpointsResponse($result->toArray());
    }
}
