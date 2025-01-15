<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $stepGroupId
 * @property string $workflowId
 * @property 'MANUAL'|'AUTOMATED' $stepActionType
 * @property string|null $description
 * @property Shapes\WorkflowStepAutomationConfiguration|null $workflowStepAutomationConfiguration
 * @property list<string>|null $stepTarget
 * @property list<Shapes\WorkflowStepOutput>|null $outputs
 * @property list<string>|null $previous
 * @property list<string>|null $next
 */
class CreateWorkflowStepRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     stepGroupId: string,
     *     workflowId: string,
     *     stepActionType: 'MANUAL'|'AUTOMATED',
     *     description?: string|null,
     *     workflowStepAutomationConfiguration?: Shapes\WorkflowStepAutomationConfiguration|null,
     *     stepTarget?: list<string>|null,
     *     outputs?: list<Shapes\WorkflowStepOutput>|null,
     *     previous?: list<string>|null,
     *     next?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
