<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListPrivateGraphEndpoints;

trait ListPrivateGraphEndpointsTrait
{
    /**
     * @param ListPrivateGraphEndpointsRequest $args
     * @return ListPrivateGraphEndpointsResponse
     */
    public function listPrivateGraphEndpoints(ListPrivateGraphEndpointsRequest $args)
    {
        $result = parent::listPrivateGraphEndpoints($args->toArray());
        return new ListPrivateGraphEndpointsResponse($result->toArray());
    }
}
