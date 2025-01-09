<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ShadowMode' $Type
 * @property InferenceExperimentSchedule $Schedule
 * @property 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled' $Status
 * @property string $StatusReason
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $RoleArn
 */
class InferenceExperimentSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'ShadowMode',
     *     Schedule?: InferenceExperimentSchedule,
     *     Status: 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled',
     *     StatusReason?: string,
     *     Description?: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
