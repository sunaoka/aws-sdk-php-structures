<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceSchedulers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property string $InferenceSchedulerName
 * @property string $InferenceSchedulerArn
 * @property 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED' $Status
 * @property int<0, 60> $DataDelayOffsetInMinutes
 * @property 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H' $DataUploadFrequency
 * @property 'ANOMALOUS'|'NORMAL' $LatestInferenceResult
 */
class InferenceSchedulerSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     ModelArn?: string,
     *     InferenceSchedulerName?: string,
     *     InferenceSchedulerArn?: string,
     *     Status?: 'PENDING'|'RUNNING'|'STOPPING'|'STOPPED',
     *     DataDelayOffsetInMinutes?: int<0, 60>,
     *     DataUploadFrequency?: 'PT5M'|'PT10M'|'PT15M'|'PT30M'|'PT1H',
     *     LatestInferenceResult?: 'ANOMALOUS'|'NORMAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
