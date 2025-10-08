<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateEndpointGroup;

trait CreateEndpointGroupTrait
{
    /**
     * @param CreateEndpointGroupRequest $args
     * @return CreateEndpointGroupResponse
     */
    public function createEndpointGroup(CreateEndpointGroupRequest $args)
    {
        $result = parent::createEndpointGroup($args->toArray());
        return new CreateEndpointGroupResponse($result->toArray());
    }
}
