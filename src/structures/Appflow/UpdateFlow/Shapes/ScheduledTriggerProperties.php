<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scheduleExpression
 * @property 'Incremental'|'Complete'|null $dataPullMode
 * @property \Aws\Api\DateTimeResult|null $scheduleStartTime
 * @property \Aws\Api\DateTimeResult|null $scheduleEndTime
 * @property string|null $timezone
 * @property int<0, 36000>|null $scheduleOffset
 * @property \Aws\Api\DateTimeResult|null $firstExecutionFrom
 * @property int<1, 100>|null $flowErrorDeactivationThreshold
 */
class ScheduledTriggerProperties extends Shape
{
    /**
     * @param array{
     *     scheduleExpression: string,
     *     dataPullMode?: 'Incremental'|'Complete'|null,
     *     scheduleStartTime?: \Aws\Api\DateTimeResult|null,
     *     scheduleEndTime?: \Aws\Api\DateTimeResult|null,
     *     timezone?: string|null,
     *     scheduleOffset?: int<0, 36000>|null,
     *     firstExecutionFrom?: \Aws\Api\DateTimeResult|null,
     *     flowErrorDeactivationThreshold?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
