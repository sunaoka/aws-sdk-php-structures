<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListEndpointGroups;

trait ListEndpointGroupsTrait
{
    /**
     * @param ListEndpointGroupsRequest $args
     * @return ListEndpointGroupsResponse
     */
    public function listEndpointGroups(ListEndpointGroupsRequest $args)
    {
        $result = parent::listEndpointGroups($args->toArray());
        return new ListEndpointGroupsResponse($result->toArray());
    }
}
