<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetConnectionGroupByRoutingEndpoint;

trait GetConnectionGroupByRoutingEndpointTrait
{
    /**
     * @param GetConnectionGroupByRoutingEndpointRequest $args
     * @return GetConnectionGroupByRoutingEndpointResponse
     */
    public function getConnectionGroupByRoutingEndpoint(GetConnectionGroupByRoutingEndpointRequest $args)
    {
        $result = parent::getConnectionGroupByRoutingEndpoint($args->toArray());
        return new GetConnectionGroupByRoutingEndpointResponse($result->toArray());
    }
}
