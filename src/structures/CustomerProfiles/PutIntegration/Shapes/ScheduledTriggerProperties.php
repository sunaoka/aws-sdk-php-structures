<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property 'Incremental'|'Complete' $DataPullMode
 * @property \Aws\Api\DateTimeResult $ScheduleStartTime
 * @property \Aws\Api\DateTimeResult $ScheduleEndTime
 * @property string $Timezone
 * @property int<0, 36000> $ScheduleOffset
 * @property \Aws\Api\DateTimeResult $FirstExecutionFrom
 */
class ScheduledTriggerProperties extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     DataPullMode?: 'Incremental'|'Complete',
     *     ScheduleStartTime?: \Aws\Api\DateTimeResult,
     *     ScheduleEndTime?: \Aws\Api\DateTimeResult,
     *     Timezone?: string,
     *     ScheduleOffset?: int<0, 36000>,
     *     FirstExecutionFrom?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
