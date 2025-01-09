<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepExecutionId
 * @property string $name
 * @property string $description
 * @property string $action
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED' $status
 * @property 'RUNNING'|'COMPLETED'|'SKIPPED'|'FAILED' $rollbackStatus
 * @property string $message
 * @property string $inputs
 * @property string $outputs
 * @property string $startTime
 * @property string $endTime
 */
class WorkflowStepMetadata extends Shape
{
    /**
     * @param array{
     *     stepExecutionId?: string,
     *     name?: string,
     *     description?: string,
     *     action?: string,
     *     status?: 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED',
     *     rollbackStatus?: 'RUNNING'|'COMPLETED'|'SKIPPED'|'FAILED',
     *     message?: string,
     *     inputs?: string,
     *     outputs?: string,
     *     startTime?: string,
     *     endTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
