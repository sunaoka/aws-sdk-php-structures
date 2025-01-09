<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InferenceSchedulerArn
 * @property string $InferenceSchedulerName
 * @property \Aws\Api\DateTimeResult $EventStartTime
 * @property \Aws\Api\DateTimeResult $EventEndTime
 * @property string $Diagnostics
 * @property int $EventDurationInSeconds
 */
class InferenceEventSummary extends Shape
{
    /**
     * @param array{
     *     InferenceSchedulerArn?: string,
     *     InferenceSchedulerName?: string,
     *     EventStartTime?: \Aws\Api\DateTimeResult,
     *     EventEndTime?: \Aws\Api\DateTimeResult,
     *     Diagnostics?: string,
     *     EventDurationInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
