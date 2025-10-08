<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyAnnotation> $annotations
 */
class AutomatedReasoningPolicyBuildWorkflowRepairContent extends Shape
{
    /**
     * @param array{annotations: list<AutomatedReasoningPolicyAnnotation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
