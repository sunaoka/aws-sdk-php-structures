<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stepExecutionId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $action
 * @property 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $status
 * @property 'RUNNING'|'COMPLETED'|'SKIPPED'|'FAILED'|null $rollbackStatus
 * @property string|null $message
 * @property string|null $inputs
 * @property string|null $outputs
 * @property string|null $startTime
 * @property string|null $endTime
 */
class WorkflowStepMetadata extends Shape
{
    /**
     * @param array{
     *     stepExecutionId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     action?: string|null,
     *     status?: 'PENDING'|'SKIPPED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     rollbackStatus?: 'RUNNING'|'COMPLETED'|'SKIPPED'|'FAILED'|null,
     *     message?: string|null,
     *     inputs?: string|null,
     *     outputs?: string|null,
     *     startTime?: string|null,
     *     endTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
