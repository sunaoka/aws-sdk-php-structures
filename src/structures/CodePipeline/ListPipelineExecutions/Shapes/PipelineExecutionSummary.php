<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed' $status
 * @property string $statusSummary
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property list<SourceRevision> $sourceRevisions
 * @property ExecutionTrigger $trigger
 * @property StopExecutionTrigger $stopTrigger
 * @property 'QUEUED'|'SUPERSEDED'|'PARALLEL' $executionMode
 * @property 'STANDARD'|'ROLLBACK' $executionType
 * @property PipelineRollbackMetadata $rollbackMetadata
 */
class PipelineExecutionSummary extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string,
     *     status?: 'Cancelled'|'InProgress'|'Stopped'|'Stopping'|'Succeeded'|'Superseded'|'Failed',
     *     statusSummary?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     sourceRevisions?: list<SourceRevision>,
     *     trigger?: ExecutionTrigger,
     *     stopTrigger?: StopExecutionTrigger,
     *     executionMode?: 'QUEUED'|'SUPERSEDED'|'PARALLEL',
     *     executionType?: 'STANDARD'|'ROLLBACK',
     *     rollbackMetadata?: PipelineRollbackMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
