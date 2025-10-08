<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingEndpointGroup;

trait CreateCustomRoutingEndpointGroupTrait
{
    /**
     * @param CreateCustomRoutingEndpointGroupRequest $args
     * @return CreateCustomRoutingEndpointGroupResponse
     */
    public function createCustomRoutingEndpointGroup(CreateCustomRoutingEndpointGroupRequest $args)
    {
        $result = parent::createCustomRoutingEndpointGroup($args->toArray());
        return new CreateCustomRoutingEndpointGroupResponse($result->toArray());
    }
}
