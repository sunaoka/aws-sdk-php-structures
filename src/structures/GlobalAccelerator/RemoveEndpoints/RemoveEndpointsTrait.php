<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\RemoveEndpoints;

trait RemoveEndpointsTrait
{
    /**
     * @param RemoveEndpointsRequest $args
     * @return void
     */
    public function removeEndpoints(RemoveEndpointsRequest $args)
    {
        parent::removeEndpoints($args->toArray());
    }
}
