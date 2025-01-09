<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scheduleExpression
 * @property 'Incremental'|'Complete' $dataPullMode
 * @property \Aws\Api\DateTimeResult $scheduleStartTime
 * @property \Aws\Api\DateTimeResult $scheduleEndTime
 * @property string $timezone
 * @property int<0, 36000> $scheduleOffset
 * @property \Aws\Api\DateTimeResult $firstExecutionFrom
 * @property int<1, 100> $flowErrorDeactivationThreshold
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
     *     scheduleOffset?: int<0, 36000>,
     *     firstExecutionFrom?: \Aws\Api\DateTimeResult,
     *     flowErrorDeactivationThreshold?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
