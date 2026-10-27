<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterDestinationEndpoint;

trait DeregisterDestinationEndpointTrait
{
    /**
     * @param DeregisterDestinationEndpointRequest $args
     * @return DeregisterDestinationEndpointResponse
     */
    public function deregisterDestinationEndpoint(DeregisterDestinationEndpointRequest $args)
    {
        $result = parent::deregisterDestinationEndpoint($args->toArray());
        return new DeregisterDestinationEndpointResponse($result->toArray());
    }
}
