<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup;

trait GetDataflowEndpointGroupTrait
{
    /**
     * @param GetDataflowEndpointGroupRequest $args
     * @return GetDataflowEndpointGroupResponse
     */
    public function getDataflowEndpointGroup(GetDataflowEndpointGroupRequest $args)
    {
        $result = parent::getDataflowEndpointGroup($args->toArray());
        return new GetDataflowEndpointGroupResponse($result->toArray());
    }
}
