<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StepName
 * @property string|null $StepDisplayName
 * @property string|null $StepDescription
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'Starting'|'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null $StepStatus
 * @property CacheHitResult|null $CacheHitResult
 * @property string|null $FailureReason
 * @property PipelineExecutionStepMetadata|null $Metadata
 * @property int|null $AttemptCount
 * @property SelectiveExecutionResult|null $SelectiveExecutionResult
 */
class PipelineExecutionStep extends Shape
{
    /**
     * @param array{
     *     StepName?: string|null,
     *     StepDisplayName?: string|null,
     *     StepDescription?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     StepStatus?: 'Starting'|'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null,
     *     CacheHitResult?: CacheHitResult|null,
     *     FailureReason?: string|null,
     *     Metadata?: PipelineExecutionStepMetadata|null,
     *     AttemptCount?: int|null,
     *     SelectiveExecutionResult?: SelectiveExecutionResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
