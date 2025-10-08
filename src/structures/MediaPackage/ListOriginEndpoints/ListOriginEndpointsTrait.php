<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints;

trait ListOriginEndpointsTrait
{
    /**
     * @param ListOriginEndpointsRequest $args
     * @return ListOriginEndpointsResponse
     */
    public function listOriginEndpoints(ListOriginEndpointsRequest $args)
    {
        $result = parent::listOriginEndpoints($args->toArray());
        return new ListOriginEndpointsResponse($result->toArray());
    }
}
