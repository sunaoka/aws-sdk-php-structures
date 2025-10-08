<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateEndpointGroup;

trait UpdateEndpointGroupTrait
{
    /**
     * @param UpdateEndpointGroupRequest $args
     * @return UpdateEndpointGroupResponse
     */
    public function updateEndpointGroup(UpdateEndpointGroupRequest $args)
    {
        $result = parent::updateEndpointGroup($args->toArray());
        return new UpdateEndpointGroupResponse($result->toArray());
    }
}
