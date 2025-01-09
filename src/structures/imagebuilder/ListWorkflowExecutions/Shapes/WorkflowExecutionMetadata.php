<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowBuildVersionArn
 * @property string $workflowExecutionId
 * @property 'BUILD'|'TEST'|'DISTRIBUTION' $type
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETED'|'CANCELLED' $status
 * @property string $message
 * @property int $totalStepCount
 * @property int $totalStepsSucceeded
 * @property int $totalStepsFailed
 * @property int $totalStepsSkipped
 * @property string $startTime
 * @property string $endTime
 * @property string $parallelGroup
 */
class WorkflowExecutionMetadata extends Shape
{
    /**
     * @param array{
     *     workflowBuildVersionArn?: string,
     *     workflowExecutionId?: string,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION',
     *     status?: 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETED'|'CANCELLED',
     *     message?: string,
     *     totalStepCount?: int,
     *     totalStepsSucceeded?: int,
     *     totalStepsFailed?: int,
     *     totalStepsSkipped?: int,
     *     startTime?: string,
     *     endTime?: string,
     *     parallelGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
