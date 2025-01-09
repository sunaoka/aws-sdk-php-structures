<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateWorkflowStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $stepGroupId
 * @property string $workflowId
 * @property string $name
 * @property string $description
 * @property 'MANUAL'|'AUTOMATED' $stepActionType
 * @property Shapes\WorkflowStepAutomationConfiguration $workflowStepAutomationConfiguration
 * @property list<string> $stepTarget
 * @property list<Shapes\WorkflowStepOutput> $outputs
 * @property list<string> $previous
 * @property list<string> $next
 * @property 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED' $status
 */
class UpdateWorkflowStepRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     stepGroupId: string,
     *     workflowId: string,
     *     name?: string,
     *     description?: string,
     *     stepActionType?: 'MANUAL'|'AUTOMATED',
     *     workflowStepAutomationConfiguration?: Shapes\WorkflowStepAutomationConfiguration,
     *     stepTarget?: list<string>,
     *     outputs?: list<Shapes\WorkflowStepOutput>,
     *     previous?: list<string>,
     *     next?: list<string>,
     *     status?: 'AWAITING_DEPENDENCIES'|'SKIPPED'|'READY'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'PAUSED'|'USER_ATTENTION_REQUIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
