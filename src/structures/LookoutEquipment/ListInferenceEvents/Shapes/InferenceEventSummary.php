<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InferenceSchedulerArn
 * @property string|null $InferenceSchedulerName
 * @property \Aws\Api\DateTimeResult|null $EventStartTime
 * @property \Aws\Api\DateTimeResult|null $EventEndTime
 * @property string|null $Diagnostics
 * @property int<0, max>|null $EventDurationInSeconds
 */
class InferenceEventSummary extends Shape
{
    /**
     * @param array{
     *     InferenceSchedulerArn?: string|null,
     *     InferenceSchedulerName?: string|null,
     *     EventStartTime?: \Aws\Api\DateTimeResult|null,
     *     EventEndTime?: \Aws\Api\DateTimeResult|null,
     *     Diagnostics?: string|null,
     *     EventDurationInSeconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
