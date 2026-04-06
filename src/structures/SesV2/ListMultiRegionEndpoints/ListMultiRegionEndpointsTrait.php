<?php

namespace Sunaoka\Aws\Structures\SesV2\ListMultiRegionEndpoints;

trait ListMultiRegionEndpointsTrait
{
    /**
     * @param ListMultiRegionEndpointsRequest $args
     * @return ListMultiRegionEndpointsResponse
     */
    public function listMultiRegionEndpoints(ListMultiRegionEndpointsRequest $args)
    {
        $result = parent::listMultiRegionEndpoints($args->toArray());
        return new ListMultiRegionEndpointsResponse($result->toArray());
    }
}
