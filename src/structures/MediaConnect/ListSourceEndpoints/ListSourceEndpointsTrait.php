<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListSourceEndpoints;

trait ListSourceEndpointsTrait
{
    /**
     * @param ListSourceEndpointsRequest $args
     * @return ListSourceEndpointsResponse
     */
    public function listSourceEndpoints(ListSourceEndpointsRequest $args)
    {
        $result = parent::listSourceEndpoints($args->toArray());
        return new ListSourceEndpointsResponse($result->toArray());
    }
}
