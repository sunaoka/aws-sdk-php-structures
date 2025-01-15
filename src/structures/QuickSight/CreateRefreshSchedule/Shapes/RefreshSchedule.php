<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateRefreshSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleId
 * @property RefreshFrequency $ScheduleFrequency
 * @property \Aws\Api\DateTimeResult|null $StartAfterDateTime
 * @property 'INCREMENTAL_REFRESH'|'FULL_REFRESH' $RefreshType
 * @property string|null $Arn
 */
class RefreshSchedule extends Shape
{
    /**
     * @param array{
     *     ScheduleId: string,
     *     ScheduleFrequency: RefreshFrequency,
     *     StartAfterDateTime?: \Aws\Api\DateTimeResult|null,
     *     RefreshType: 'INCREMENTAL_REFRESH'|'FULL_REFRESH',
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
