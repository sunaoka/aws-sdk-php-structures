<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListDataflowEndpointGroups;

trait ListDataflowEndpointGroupsTrait
{
    /**
     * @param ListDataflowEndpointGroupsRequest $args
     * @return ListDataflowEndpointGroupsResponse
     */
    public function listDataflowEndpointGroups(ListDataflowEndpointGroupsRequest $args)
    {
        $result = parent::listDataflowEndpointGroups($args->toArray());
        return new ListDataflowEndpointGroupsResponse($result->toArray());
    }
}
