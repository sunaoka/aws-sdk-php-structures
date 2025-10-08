<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateScheduleGroup;

trait CreateScheduleGroupTrait
{
    /**
     * @param CreateScheduleGroupRequest $args
     * @return CreateScheduleGroupResponse
     */
    public function createScheduleGroup(CreateScheduleGroupRequest $args)
    {
        $result = parent::createScheduleGroup($args->toArray());
        return new CreateScheduleGroupResponse($result->toArray());
    }
}
