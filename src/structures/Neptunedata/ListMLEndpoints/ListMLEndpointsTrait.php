<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLEndpoints;

trait ListMLEndpointsTrait
{
    /**
     * @param ListMLEndpointsRequest $args
     * @return ListMLEndpointsResponse
     */
    public function listMLEndpoints(ListMLEndpointsRequest $args)
    {
        $result = parent::listMLEndpoints($args->toArray());
        return new ListMLEndpointsResponse($result->toArray());
    }
}
