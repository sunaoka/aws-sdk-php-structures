<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 */
class AutomatedReasoningPolicyDeleteRuleAnnotation extends Shape
{
    /**
     * @param array{ruleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
