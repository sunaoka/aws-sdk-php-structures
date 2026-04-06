<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyDefinition|null $policyDefinition
 * @property AutomatedReasoningPolicyWorkflowTypeContent|null $workflowContent
 */
class AutomatedReasoningPolicyBuildWorkflowSource extends Shape
{
    /**
     * @param array{
     *     policyDefinition?: AutomatedReasoningPolicyDefinition|null,
     *     workflowContent?: AutomatedReasoningPolicyWorkflowTypeContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
