<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetScheduleGroup;

trait GetScheduleGroupTrait
{
    /**
     * @param GetScheduleGroupRequest $args
     * @return GetScheduleGroupResponse
     */
    public function getScheduleGroup(GetScheduleGroupRequest $args)
    {
        $result = parent::getScheduleGroup($args->toArray());
        return new GetScheduleGroupResponse($result->toArray());
    }
}
