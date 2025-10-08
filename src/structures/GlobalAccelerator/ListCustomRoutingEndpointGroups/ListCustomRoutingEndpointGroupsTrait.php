<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingEndpointGroups;

trait ListCustomRoutingEndpointGroupsTrait
{
    /**
     * @param ListCustomRoutingEndpointGroupsRequest $args
     * @return ListCustomRoutingEndpointGroupsResponse
     */
    public function listCustomRoutingEndpointGroups(ListCustomRoutingEndpointGroupsRequest $args)
    {
        $result = parent::listCustomRoutingEndpointGroups($args->toArray());
        return new ListCustomRoutingEndpointGroupsResponse($result->toArray());
    }
}
