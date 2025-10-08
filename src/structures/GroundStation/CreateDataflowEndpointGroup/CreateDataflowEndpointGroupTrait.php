<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup;

trait CreateDataflowEndpointGroupTrait
{
    /**
     * @param CreateDataflowEndpointGroupRequest $args
     * @return CreateDataflowEndpointGroupResponse
     */
    public function createDataflowEndpointGroup(CreateDataflowEndpointGroupRequest $args)
    {
        $result = parent::createDataflowEndpointGroup($args->toArray());
        return new CreateDataflowEndpointGroupResponse($result->toArray());
    }
}
