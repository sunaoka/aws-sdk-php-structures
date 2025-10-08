<?php

namespace Sunaoka\Aws\Structures\Scheduler\DeleteScheduleGroup;

trait DeleteScheduleGroupTrait
{
    /**
     * @param DeleteScheduleGroupRequest $args
     * @return DeleteScheduleGroupResponse
     */
    public function deleteScheduleGroup(DeleteScheduleGroupRequest $args)
    {
        $result = parent::deleteScheduleGroup($args->toArray());
        return new DeleteScheduleGroupResponse($result->toArray());
    }
}
