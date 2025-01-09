<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property string $InferenceSchedulerName
 * @property string $InferenceSchedulerArn
 * @property \Aws\Api\DateTimeResult $ScheduledStartTime
 * @property \Aws\Api\DateTimeResult $DataStartTime
 * @property \Aws\Api\DateTimeResult $DataEndTime
 * @property InferenceInputConfiguration $DataInputConfiguration
 * @property InferenceOutputConfiguration $DataOutputConfiguration
 * @property S3Object $CustomerResultObject
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED' $Status
 * @property string $FailedReason
 * @property int<1, max> $ModelVersion
 * @property string $ModelVersionArn
 */
class InferenceExecutionSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     ModelArn?: string,
     *     InferenceSchedulerName?: string,
     *     InferenceSchedulerArn?: string,
     *     ScheduledStartTime?: \Aws\Api\DateTimeResult,
     *     DataStartTime?: \Aws\Api\DateTimeResult,
     *     DataEndTime?: \Aws\Api\DateTimeResult,
     *     DataInputConfiguration?: InferenceInputConfiguration,
     *     DataOutputConfiguration?: InferenceOutputConfiguration,
     *     CustomerResultObject?: S3Object,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED',
     *     FailedReason?: string,
     *     ModelVersion?: int<1, max>,
     *     ModelVersionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
