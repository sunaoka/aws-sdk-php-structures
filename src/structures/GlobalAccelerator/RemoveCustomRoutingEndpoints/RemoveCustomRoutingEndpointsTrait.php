<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\RemoveCustomRoutingEndpoints;

trait RemoveCustomRoutingEndpointsTrait
{
    /**
     * @param RemoveCustomRoutingEndpointsRequest $args
     * @return void
     */
    public function removeCustomRoutingEndpoints(RemoveCustomRoutingEndpointsRequest $args)
    {
        parent::removeCustomRoutingEndpoints($args->toArray());
    }
}
