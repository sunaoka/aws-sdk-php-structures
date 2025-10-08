<?php

namespace Sunaoka\Aws\Structures\Glue\ListDevEndpoints;

trait ListDevEndpointsTrait
{
    /**
     * @param ListDevEndpointsRequest $args
     * @return ListDevEndpointsResponse
     */
    public function listDevEndpoints(ListDevEndpointsRequest $args)
    {
        $result = parent::listDevEndpoints($args->toArray());
        return new ListDevEndpointsResponse($result->toArray());
    }
}
