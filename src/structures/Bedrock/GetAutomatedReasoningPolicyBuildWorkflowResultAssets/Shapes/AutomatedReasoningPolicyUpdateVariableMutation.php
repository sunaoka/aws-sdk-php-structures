<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyDefinitionVariable $variable
 */
class AutomatedReasoningPolicyUpdateVariableMutation extends Shape
{
    /**
     * @param array{variable: AutomatedReasoningPolicyDefinitionVariable} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
