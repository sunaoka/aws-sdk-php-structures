<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyBuildWorkflowDocument>|null $documents
 * @property AutomatedReasoningPolicyBuildWorkflowRepairContent|null $policyRepairAssets
 */
class AutomatedReasoningPolicyWorkflowTypeContent extends Shape
{
    /**
     * @param array{
     *     documents?: list<AutomatedReasoningPolicyBuildWorkflowDocument>|null,
     *     policyRepairAssets?: AutomatedReasoningPolicyBuildWorkflowRepairContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
