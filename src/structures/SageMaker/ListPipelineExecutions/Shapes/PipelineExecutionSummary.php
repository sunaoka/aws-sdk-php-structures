<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineExecutionArn
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null $PipelineExecutionStatus
 * @property string|null $PipelineExecutionDescription
 * @property string|null $PipelineExecutionDisplayName
 * @property string|null $PipelineExecutionFailureReason
 */
class PipelineExecutionSummary extends Shape
{
    /**
     * @param array{
     *     PipelineExecutionArn?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     PipelineExecutionStatus?: 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null,
     *     PipelineExecutionDescription?: string|null,
     *     PipelineExecutionDisplayName?: string|null,
     *     PipelineExecutionFailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
