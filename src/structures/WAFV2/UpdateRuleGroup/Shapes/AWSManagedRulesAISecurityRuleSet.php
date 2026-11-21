<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockGuardrails $BedrockGuardrails
 */
class AWSManagedRulesAISecurityRuleSet extends Shape
{
    /**
     * @param array{BedrockGuardrails: BedrockGuardrails} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
