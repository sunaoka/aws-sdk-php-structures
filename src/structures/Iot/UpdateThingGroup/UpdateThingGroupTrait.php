<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingGroup;

trait UpdateThingGroupTrait
{
    /**
     * @param UpdateThingGroupRequest $args
     * @return UpdateThingGroupResponse
     */
    public function updateThingGroup(UpdateThingGroupRequest $args)
    {
        $result = parent::updateThingGroup($args->toArray());
        return new UpdateThingGroupResponse($result->toArray());
    }
}
