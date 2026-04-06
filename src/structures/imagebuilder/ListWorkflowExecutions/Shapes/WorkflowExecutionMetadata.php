<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workflowBuildVersionArn
 * @property string|null $workflowExecutionId
 * @property 'BUILD'|'TEST'|'DISTRIBUTION'|null $type
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETED'|'CANCELLED'|null $status
 * @property string|null $message
 * @property int|null $totalStepCount
 * @property int|null $totalStepsSucceeded
 * @property int|null $totalStepsFailed
 * @property int|null $totalStepsSkipped
 * @property string|null $startTime
 * @property string|null $endTime
 * @property string|null $parallelGroup
 * @property bool|null $retried
 */
class WorkflowExecutionMetadata extends Shape
{
    /**
     * @param array{
     *     workflowBuildVersionArn?: string|null,
     *     workflowExecutionId?: string|null,
     *     type?: 'BUILD'|'TEST'|'DISTRIBUTION'|null,
     *     status?: 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETED'|'CANCELLED'|null,
     *     message?: string|null,
     *     totalStepCount?: int|null,
     *     totalStepsSucceeded?: int|null,
     *     totalStepsFailed?: int|null,
     *     totalStepsSkipped?: int|null,
     *     startTime?: string|null,
     *     endTime?: string|null,
     *     parallelGroup?: string|null,
     *     retried?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
