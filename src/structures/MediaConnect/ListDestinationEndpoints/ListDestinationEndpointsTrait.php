<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListDestinationEndpoints;

trait ListDestinationEndpointsTrait
{
    /**
     * @param ListDestinationEndpointsRequest $args
     * @return ListDestinationEndpointsResponse
     */
    public function listDestinationEndpoints(ListDestinationEndpointsRequest $args)
    {
        $result = parent::listDestinationEndpoints($args->toArray());
        return new ListDestinationEndpointsResponse($result->toArray());
    }
}
