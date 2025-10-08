<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDynamicThingGroup;

trait UpdateDynamicThingGroupTrait
{
    /**
     * @param UpdateDynamicThingGroupRequest $args
     * @return UpdateDynamicThingGroupResponse
     */
    public function updateDynamicThingGroup(UpdateDynamicThingGroupRequest $args)
    {
        $result = parent::updateDynamicThingGroup($args->toArray());
        return new UpdateDynamicThingGroupResponse($result->toArray());
    }
}
