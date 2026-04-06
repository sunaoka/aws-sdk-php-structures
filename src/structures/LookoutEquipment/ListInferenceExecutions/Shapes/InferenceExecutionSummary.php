<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListInferenceExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property string|null $InferenceSchedulerName
 * @property string|null $InferenceSchedulerArn
 * @property \Aws\Api\DateTimeResult|null $ScheduledStartTime
 * @property \Aws\Api\DateTimeResult|null $DataStartTime
 * @property \Aws\Api\DateTimeResult|null $DataEndTime
 * @property InferenceInputConfiguration|null $DataInputConfiguration
 * @property InferenceOutputConfiguration|null $DataOutputConfiguration
 * @property S3Object|null $CustomerResultObject
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null $Status
 * @property string|null $FailedReason
 * @property int<1, max>|null $ModelVersion
 * @property string|null $ModelVersionArn
 */
class InferenceExecutionSummary extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     ModelArn?: string|null,
     *     InferenceSchedulerName?: string|null,
     *     InferenceSchedulerArn?: string|null,
     *     ScheduledStartTime?: \Aws\Api\DateTimeResult|null,
     *     DataStartTime?: \Aws\Api\DateTimeResult|null,
     *     DataEndTime?: \Aws\Api\DateTimeResult|null,
     *     DataInputConfiguration?: InferenceInputConfiguration|null,
     *     DataOutputConfiguration?: InferenceOutputConfiguration|null,
     *     CustomerResultObject?: S3Object|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null,
     *     FailedReason?: string|null,
     *     ModelVersion?: int<1, max>|null,
     *     ModelVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
