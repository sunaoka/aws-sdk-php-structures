<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 */
class AutomatedReasoningPolicyAddRuleAnnotation extends Shape
{
    /**
     * @param array{expression: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
