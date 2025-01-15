<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $WorkflowRunId
 * @property string|null $PreviousRunId
 * @property array<string, string>|null $WorkflowRunProperties
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'ERROR'|null $Status
 * @property string|null $ErrorMessage
 * @property WorkflowRunStatistics|null $Statistics
 * @property WorkflowGraph|null $Graph
 * @property StartingEventBatchCondition|null $StartingEventBatchCondition
 */
class WorkflowRun extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     WorkflowRunId?: string|null,
     *     PreviousRunId?: string|null,
     *     WorkflowRunProperties?: array<string, string>|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'ERROR'|null,
     *     ErrorMessage?: string|null,
     *     Statistics?: WorkflowRunStatistics|null,
     *     Graph?: WorkflowGraph|null,
     *     StartingEventBatchCondition?: StartingEventBatchCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
