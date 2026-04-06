<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property string $expression
 */
class AutomatedReasoningPolicyUpdateRuleAnnotation extends Shape
{
    /**
     * @param array{
     *     ruleId: string,
     *     expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
