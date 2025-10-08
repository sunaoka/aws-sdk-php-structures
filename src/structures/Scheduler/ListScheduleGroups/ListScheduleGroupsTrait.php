<?php

namespace Sunaoka\Aws\Structures\Scheduler\ListScheduleGroups;

trait ListScheduleGroupsTrait
{
    /**
     * @param ListScheduleGroupsRequest $args
     * @return ListScheduleGroupsResponse
     */
    public function listScheduleGroups(ListScheduleGroupsRequest $args)
    {
        $result = parent::listScheduleGroups($args->toArray());
        return new ListScheduleGroupsResponse($result->toArray());
    }
}
