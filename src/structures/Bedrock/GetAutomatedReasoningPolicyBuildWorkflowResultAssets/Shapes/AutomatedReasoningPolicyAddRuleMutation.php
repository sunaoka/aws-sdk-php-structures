<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyDefinitionRule $rule
 */
class AutomatedReasoningPolicyAddRuleMutation extends Shape
{
    /**
     * @param array{rule: AutomatedReasoningPolicyDefinitionRule} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
