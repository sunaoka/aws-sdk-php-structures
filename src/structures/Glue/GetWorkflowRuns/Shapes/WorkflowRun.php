<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $WorkflowRunId
 * @property string $PreviousRunId
 * @property array<string, string> $WorkflowRunProperties
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'ERROR' $Status
 * @property string $ErrorMessage
 * @property WorkflowRunStatistics $Statistics
 * @property WorkflowGraph $Graph
 * @property StartingEventBatchCondition $StartingEventBatchCondition
 */
class WorkflowRun extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     WorkflowRunId?: string,
     *     PreviousRunId?: string,
     *     WorkflowRunProperties?: array<string, string>,
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     Status?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'ERROR',
     *     ErrorMessage?: string,
     *     Statistics?: WorkflowRunStatistics,
     *     Graph?: WorkflowGraph,
     *     StartingEventBatchCondition?: StartingEventBatchCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
