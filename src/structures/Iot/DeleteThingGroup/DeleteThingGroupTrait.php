<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteThingGroup;

trait DeleteThingGroupTrait
{
    /**
     * @param DeleteThingGroupRequest $args
     * @return DeleteThingGroupResponse
     */
    public function deleteThingGroup(DeleteThingGroupRequest $args)
    {
        $result = parent::deleteThingGroup($args->toArray());
        return new DeleteThingGroupResponse($result->toArray());
    }
}
