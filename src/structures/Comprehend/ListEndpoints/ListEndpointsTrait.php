<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEndpoints;

trait ListEndpointsTrait
{
    /**
     * @param ListEndpointsRequest $args
     * @return ListEndpointsResponse
     */
    public function listEndpoints(ListEndpointsRequest $args)
    {
        $result = parent::listEndpoints($args->toArray());
        return new ListEndpointsResponse($result->toArray());
    }
}
