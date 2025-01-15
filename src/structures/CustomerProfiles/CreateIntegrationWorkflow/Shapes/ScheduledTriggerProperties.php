<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property 'Incremental'|'Complete'|null $DataPullMode
 * @property \Aws\Api\DateTimeResult|null $ScheduleStartTime
 * @property \Aws\Api\DateTimeResult|null $ScheduleEndTime
 * @property string|null $Timezone
 * @property int<0, 36000>|null $ScheduleOffset
 * @property \Aws\Api\DateTimeResult|null $FirstExecutionFrom
 */
class ScheduledTriggerProperties extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     DataPullMode?: 'Incremental'|'Complete'|null,
     *     ScheduleStartTime?: \Aws\Api\DateTimeResult|null,
     *     ScheduleEndTime?: \Aws\Api\DateTimeResult|null,
     *     Timezone?: string|null,
     *     ScheduleOffset?: int<0, 36000>|null,
     *     FirstExecutionFrom?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
