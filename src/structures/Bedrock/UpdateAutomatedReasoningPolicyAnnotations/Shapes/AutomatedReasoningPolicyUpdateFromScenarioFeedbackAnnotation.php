<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ruleIds
 * @property string $scenarioExpression
 * @property string|null $feedback
 */
class AutomatedReasoningPolicyUpdateFromScenarioFeedbackAnnotation extends Shape
{
    /**
     * @param array{
     *     ruleIds?: list<string>|null,
     *     scenarioExpression: string,
     *     feedback?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
