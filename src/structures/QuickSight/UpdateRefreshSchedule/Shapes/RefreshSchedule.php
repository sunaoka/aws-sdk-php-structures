<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateRefreshSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleId
 * @property RefreshFrequency $ScheduleFrequency
 * @property \Aws\Api\DateTimeResult $StartAfterDateTime
 * @property 'INCREMENTAL_REFRESH'|'FULL_REFRESH' $RefreshType
 * @property string $Arn
 */
class RefreshSchedule extends Shape
{
    /**
     * @param array{
     *     ScheduleId: string,
     *     ScheduleFrequency: RefreshFrequency,
     *     StartAfterDateTime?: \Aws\Api\DateTimeResult,
     *     RefreshType: 'INCREMENTAL_REFRESH'|'FULL_REFRESH',
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
