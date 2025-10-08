<?php

namespace Sunaoka\Aws\Structures\Iot\AddThingToThingGroup;

trait AddThingToThingGroupTrait
{
    /**
     * @param AddThingToThingGroupRequest $args
     * @return AddThingToThingGroupResponse
     */
    public function addThingToThingGroup(AddThingToThingGroupRequest $args)
    {
        $result = parent::addThingToThingGroup($args->toArray());
        return new AddThingToThingGroupResponse($result->toArray());
    }
}
