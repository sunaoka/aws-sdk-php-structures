<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListOriginEndpoints;

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
