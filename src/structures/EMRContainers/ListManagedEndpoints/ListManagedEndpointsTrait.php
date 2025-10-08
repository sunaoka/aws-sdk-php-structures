<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints;

trait ListManagedEndpointsTrait
{
    /**
     * @param ListManagedEndpointsRequest $args
     * @return ListManagedEndpointsResponse
     */
    public function listManagedEndpoints(ListManagedEndpointsRequest $args)
    {
        $result = parent::listManagedEndpoints($args->toArray());
        return new ListManagedEndpointsResponse($result->toArray());
    }
}
