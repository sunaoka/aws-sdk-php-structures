<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateWorkflowStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $stepGroupId
 * @property string $workflowId
 * @property 'MANUAL'|'AUTOMATED' $stepActionType
 * @property string $description
 * @property Shapes\WorkflowStepAutomationConfiguration $workflowStepAutomationConfiguration
 * @property list<string> $stepTarget
 * @property list<Shapes\WorkflowStepOutput> $outputs
 * @property list<string> $previous
 * @property list<string> $next
 */
class CreateWorkflowStepRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     stepGroupId: string,
     *     workflowId: string,
     *     stepActionType: 'MANUAL'|'AUTOMATED',
     *     description?: string,
     *     workflowStepAutomationConfiguration?: Shapes\WorkflowStepAutomationConfiguration,
     *     stepTarget?: list<string>,
     *     outputs?: list<Shapes\WorkflowStepOutput>,
     *     previous?: list<string>,
     *     next?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
