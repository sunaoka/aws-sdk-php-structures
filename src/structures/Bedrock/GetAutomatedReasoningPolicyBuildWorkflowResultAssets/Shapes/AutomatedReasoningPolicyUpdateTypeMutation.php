<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyDefinitionType $type
 */
class AutomatedReasoningPolicyUpdateTypeMutation extends Shape
{
    /**
     * @param array{type: AutomatedReasoningPolicyDefinitionType} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
