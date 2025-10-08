<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteDataflowEndpointGroup;

trait DeleteDataflowEndpointGroupTrait
{
    /**
     * @param DeleteDataflowEndpointGroupRequest $args
     * @return DeleteDataflowEndpointGroupResponse
     */
    public function deleteDataflowEndpointGroup(DeleteDataflowEndpointGroupRequest $args)
    {
        $result = parent::deleteDataflowEndpointGroup($args->toArray());
        return new DeleteDataflowEndpointGroupResponse($result->toArray());
    }
}
