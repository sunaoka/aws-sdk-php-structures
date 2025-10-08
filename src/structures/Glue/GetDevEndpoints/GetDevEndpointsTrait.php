<?php

namespace Sunaoka\Aws\Structures\Glue\GetDevEndpoints;

trait GetDevEndpointsTrait
{
    /**
     * @param GetDevEndpointsRequest $args
     * @return GetDevEndpointsResponse
     */
    public function getDevEndpoints(GetDevEndpointsRequest $args)
    {
        $result = parent::getDevEndpoints($args->toArray());
        return new GetDevEndpointsResponse($result->toArray());
    }
}
