<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceExperiments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ShadowMode' $Type
 * @property InferenceExperimentSchedule|null $Schedule
 * @property 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled' $Status
 * @property string|null $StatusReason
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $RoleArn
 */
class InferenceExperimentSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'ShadowMode',
     *     Schedule?: InferenceExperimentSchedule|null,
     *     Status: 'Creating'|'Created'|'Updating'|'Running'|'Starting'|'Stopping'|'Completed'|'Cancelled',
     *     StatusReason?: string|null,
     *     Description?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     CompletionTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
