<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint;

trait GetDestinationEndpointTrait
{
    /**
     * @param GetDestinationEndpointRequest $args
     * @return GetDestinationEndpointResponse
     */
    public function getDestinationEndpoint(GetDestinationEndpointRequest $args)
    {
        $result = parent::getDestinationEndpoint($args->toArray());
        return new GetDestinationEndpointResponse($result->toArray());
    }
}
