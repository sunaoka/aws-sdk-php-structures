<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListSharedEndpoints;

trait ListSharedEndpointsTrait
{
    /**
     * @param ListSharedEndpointsRequest $args
     * @return ListSharedEndpointsResponse
     */
    public function listSharedEndpoints(ListSharedEndpointsRequest $args)
    {
        $result = parent::listSharedEndpoints($args->toArray());
        return new ListSharedEndpointsResponse($result->toArray());
    }
}
