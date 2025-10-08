<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteDynamicThingGroup;

trait DeleteDynamicThingGroupTrait
{
    /**
     * @param DeleteDynamicThingGroupRequest $args
     * @return DeleteDynamicThingGroupResponse
     */
    public function deleteDynamicThingGroup(DeleteDynamicThingGroupRequest $args)
    {
        $result = parent::deleteDynamicThingGroup($args->toArray());
        return new DeleteDynamicThingGroupResponse($result->toArray());
    }
}
