<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddEndpoints;

trait AddEndpointsTrait
{
    /**
     * @param AddEndpointsRequest $args
     * @return AddEndpointsResponse
     */
    public function addEndpoints(AddEndpointsRequest $args)
    {
        $result = parent::addEndpoints($args->toArray());
        return new AddEndpointsResponse($result->toArray());
    }
}
