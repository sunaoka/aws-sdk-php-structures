<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PipelineExecutionArn
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded' $PipelineExecutionStatus
 * @property string $PipelineExecutionDescription
 * @property string $PipelineExecutionDisplayName
 * @property string $PipelineExecutionFailureReason
 */
class PipelineExecutionSummary extends Shape
{
    /**
     * @param array{
     *     PipelineExecutionArn?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     PipelineExecutionStatus?: 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded',
     *     PipelineExecutionDescription?: string,
     *     PipelineExecutionDisplayName?: string,
     *     PipelineExecutionFailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
