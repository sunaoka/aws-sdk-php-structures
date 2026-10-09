<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CronSchedule|null $cron
 * @property TimeRangeSchedule|null $timeRange
 */
class ScheduleSpec extends Shape
{
    /**
     * @param array{
     *     cron?: CronSchedule|null,
     *     timeRange?: TimeRangeSchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
