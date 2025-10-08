<?php

namespace Sunaoka\Aws\Structures\Scheduler;

class SchedulerClient extends \Aws\Scheduler\SchedulerClient
{
    use CreateSchedule\CreateScheduleTrait;
    use CreateScheduleGroup\CreateScheduleGroupTrait;
    use DeleteSchedule\DeleteScheduleTrait;
    use DeleteScheduleGroup\DeleteScheduleGroupTrait;
    use GetSchedule\GetScheduleTrait;
    use GetScheduleGroup\GetScheduleGroupTrait;
    use ListScheduleGroups\ListScheduleGroupsTrait;
    use ListSchedules\ListSchedulesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateSchedule\UpdateScheduleTrait;
}
