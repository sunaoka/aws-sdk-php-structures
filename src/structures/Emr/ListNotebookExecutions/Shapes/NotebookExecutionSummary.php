<?php

namespace Sunaoka\Aws\Structures\Emr\ListNotebookExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NotebookExecutionId
 * @property string|null $EditorId
 * @property string|null $NotebookExecutionName
 * @property 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property NotebookS3LocationForOutput|null $NotebookS3Location
 * @property string|null $ExecutionEngineId
 */
class NotebookExecutionSummary extends Shape
{
    /**
     * @param array{
     *     NotebookExecutionId?: string|null,
     *     EditorId?: string|null,
     *     NotebookExecutionName?: string|null,
     *     Status?: 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     NotebookS3Location?: NotebookS3LocationForOutput|null,
     *     ExecutionEngineId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
