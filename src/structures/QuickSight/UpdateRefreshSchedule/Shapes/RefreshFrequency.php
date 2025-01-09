<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateRefreshSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MINUTE15'|'MINUTE30'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY' $Interval
 * @property ScheduleRefreshOnEntity $RefreshOnDay
 * @property string $Timezone
 * @property string $TimeOfTheDay
 */
class RefreshFrequency extends Shape
{
    /**
     * @param array{
     *     Interval: 'MINUTE15'|'MINUTE30'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY',
     *     RefreshOnDay?: ScheduleRefreshOnEntity,
     *     Timezone?: string,
     *     TimeOfTheDay?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
