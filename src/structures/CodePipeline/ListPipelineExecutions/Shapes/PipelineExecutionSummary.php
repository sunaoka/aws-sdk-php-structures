<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineExecutionId
 * @property 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property list<SourceRevision>|null $sourceRevisions
 * @property ExecutionTrigger|null $trigger
 * @property StopExecutionTrigger|null $stopTrigger
 */
class PipelineExecutionSummary extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string|null,
     *     status?: 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     sourceRevisions?: list<SourceRevision>|null,
     *     trigger?: ExecutionTrigger|null,
     *     stopTrigger?: StopExecutionTrigger|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
