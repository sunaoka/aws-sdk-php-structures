<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $stepGroupId
 * @property string $workflowId
 * @property string|null $name
 * @property string|null $description
 * @property 'MANUAL'|'AUTOMATED'|null $stepActionType
 * @property Shapes\WorkflowStepAutomationConfiguration|null $workflowStepAutomationConfiguration
 * @property list<string>|null $stepTarget
 * @property list<Shapes\WorkflowStepOutput>|null $outputs
 * @property list<string>|null $previous
 * @property list<string>|null $next
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED'|null $status
 */
class UpdateWorkflowStepRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     stepGroupId: string,
     *     workflowId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     stepActionType?: 'MANUAL'|'AUTOMATED'|null,
     *     workflowStepAutomationConfiguration?: Shapes\WorkflowStepAutomationConfiguration|null,
     *     stepTarget?: list<string>|null,
     *     outputs?: list<Shapes\WorkflowStepOutput>|null,
     *     previous?: list<string>|null,
     *     next?: list<string>|null,
     *     status?: 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
