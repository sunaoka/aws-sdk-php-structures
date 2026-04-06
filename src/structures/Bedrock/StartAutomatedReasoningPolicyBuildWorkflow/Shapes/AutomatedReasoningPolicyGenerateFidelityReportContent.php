<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyBuildWorkflowDocument>|null $documents
 */
class AutomatedReasoningPolicyGenerateFidelityReportContent extends Shape
{
    /**
     * @param array{documents?: list<AutomatedReasoningPolicyBuildWorkflowDocument>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
