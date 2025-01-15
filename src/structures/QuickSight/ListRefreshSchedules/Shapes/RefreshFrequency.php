<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListRefreshSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MINUTE15'|'MINUTE30'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY' $Interval
 * @property ScheduleRefreshOnEntity|null $RefreshOnDay
 * @property string|null $Timezone
 * @property string|null $TimeOfTheDay
 */
class RefreshFrequency extends Shape
{
    /**
     * @param array{
     *     Interval: 'MINUTE15'|'MINUTE30'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY',
     *     RefreshOnDay?: ScheduleRefreshOnEntity|null,
     *     Timezone?: string|null,
     *     TimeOfTheDay?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
