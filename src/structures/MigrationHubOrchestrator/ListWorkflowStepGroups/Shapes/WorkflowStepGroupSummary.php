<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflowStepGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'AWS_MANAGED'|'CUSTOM' $owner
 * @property 'AWAITING_DEPENDENCIES'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'PAUSING'|'USER_ATTENTION_REQUIRED' $status
 * @property list<string> $previous
 * @property list<string> $next
 */
class WorkflowStepGroupSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     owner?: 'AWS_MANAGED'|'CUSTOM',
     *     status?: 'AWAITING_DEPENDENCIES'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'PAUSING'|'USER_ATTENTION_REQUIRED',
     *     previous?: list<string>,
     *     next?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
