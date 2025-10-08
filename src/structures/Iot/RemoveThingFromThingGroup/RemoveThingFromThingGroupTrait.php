<?php

namespace Sunaoka\Aws\Structures\Iot\RemoveThingFromThingGroup;

trait RemoveThingFromThingGroupTrait
{
    /**
     * @param RemoveThingFromThingGroupRequest $args
     * @return RemoveThingFromThingGroupResponse
     */
    public function removeThingFromThingGroup(RemoveThingFromThingGroupRequest $args)
    {
        $result = parent::removeThingFromThingGroup($args->toArray());
        return new RemoveThingFromThingGroupResponse($result->toArray());
    }
}
