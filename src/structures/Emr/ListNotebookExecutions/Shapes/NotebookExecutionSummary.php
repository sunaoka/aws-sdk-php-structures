<?php

namespace Sunaoka\Aws\Structures\Emr\ListNotebookExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotebookExecutionId
 * @property string $EditorId
 * @property string $NotebookExecutionName
 * @property 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property NotebookS3LocationForOutput $NotebookS3Location
 * @property string $ExecutionEngineId
 */
class NotebookExecutionSummary extends Shape
{
    /**
     * @param array{
     *     NotebookExecutionId?: string,
     *     EditorId?: string,
     *     NotebookExecutionName?: string,
     *     Status?: 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     NotebookS3Location?: NotebookS3LocationForOutput,
     *     ExecutionEngineId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
