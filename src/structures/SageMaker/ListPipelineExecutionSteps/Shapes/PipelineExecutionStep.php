<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepName
 * @property string $StepDisplayName
 * @property string $StepDescription
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'Starting'|'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded' $StepStatus
 * @property CacheHitResult $CacheHitResult
 * @property string $FailureReason
 * @property PipelineExecutionStepMetadata $Metadata
 * @property int $AttemptCount
 * @property SelectiveExecutionResult $SelectiveExecutionResult
 */
class PipelineExecutionStep extends Shape
{
    /**
     * @param array{
     *     StepName?: string,
     *     StepDisplayName?: string,
     *     StepDescription?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     StepStatus?: 'Starting'|'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded',
     *     CacheHitResult?: CacheHitResult,
     *     FailureReason?: string,
     *     Metadata?: PipelineExecutionStepMetadata,
     *     AttemptCount?: int,
     *     SelectiveExecutionResult?: SelectiveExecutionResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
