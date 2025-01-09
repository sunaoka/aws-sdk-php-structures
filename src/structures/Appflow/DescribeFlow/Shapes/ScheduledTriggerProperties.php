<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scheduleExpression
 * @property 'Incremental'|'Complete' $dataPullMode
 * @property \Aws\Api\DateTimeResult $scheduleStartTime
 * @property \Aws\Api\DateTimeResult $scheduleEndTime
 * @property string $timezone
 * @property int $scheduleOffset
 * @property \Aws\Api\DateTimeResult $firstExecutionFrom
 * @property int $flowErrorDeactivationThreshold
 */
class ScheduledTriggerProperties extends Shape
{
    /**
     * @param array{
     *     scheduleExpression: string,
     *     dataPullMode?: 'Incremental'|'Complete',
     *     scheduleStartTime?: \Aws\Api\DateTimeResult,
     *     scheduleEndTime?: \Aws\Api\DateTimeResult,
     *     timezone?: string,
     *     scheduleOffset?: int,
     *     firstExecutionFrom?: \Aws\Api\DateTimeResult,
     *     flowErrorDeactivationThreshold?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
