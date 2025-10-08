<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddCustomRoutingEndpoints;

trait AddCustomRoutingEndpointsTrait
{
    /**
     * @param AddCustomRoutingEndpointsRequest $args
     * @return AddCustomRoutingEndpointsResponse
     */
    public function addCustomRoutingEndpoints(AddCustomRoutingEndpointsRequest $args)
    {
        $result = parent::addCustomRoutingEndpoints($args->toArray());
        return new AddCustomRoutingEndpointsResponse($result->toArray());
    }
}
