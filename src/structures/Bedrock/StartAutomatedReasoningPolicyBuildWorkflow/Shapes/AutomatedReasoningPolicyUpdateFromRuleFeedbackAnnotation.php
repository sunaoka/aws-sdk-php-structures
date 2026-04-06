<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ruleIds
 * @property string $feedback
 */
class AutomatedReasoningPolicyUpdateFromRuleFeedbackAnnotation extends Shape
{
    /**
     * @param array{
     *     ruleIds?: list<string>|null,
     *     feedback: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
