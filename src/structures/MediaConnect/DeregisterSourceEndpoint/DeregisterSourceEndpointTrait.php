<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterSourceEndpoint;

trait DeregisterSourceEndpointTrait
{
    /**
     * @param DeregisterSourceEndpointRequest $args
     * @return DeregisterSourceEndpointResponse
     */
    public function deregisterSourceEndpoint(DeregisterSourceEndpointRequest $args)
    {
        $result = parent::deregisterSourceEndpoint($args->toArray());
        return new DeregisterSourceEndpointResponse($result->toArray());
    }
}
