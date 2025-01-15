<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceSchedulers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property string|null $InferenceSchedulerName
 * @property string|null $InferenceSchedulerArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null $Status
 * @property int<0, 60>|null $DataDelayOffsetInMinutes
 * @property 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H'|null $DataUploadFrequency
 * @property 'ANOMALOUS'|'NORMAL'|null $LatestInferenceResult
 */
class InferenceSchedulerSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     ModelArn?: string|null,
     *     InferenceSchedulerName?: string|null,
     *     InferenceSchedulerArn?: string|null,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED'|null,
     *     DataDelayOffsetInMinutes?: int<0, 60>|null,
     *     DataUploadFrequency?: 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H'|null,
     *     LatestInferenceResult?: 'ANOMALOUS'|'NORMAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
