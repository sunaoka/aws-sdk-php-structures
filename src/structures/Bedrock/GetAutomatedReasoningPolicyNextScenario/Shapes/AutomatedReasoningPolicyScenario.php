<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyNextScenario\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property string $alternateExpression
 * @property list<string> $ruleIds
 * @property 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION' $expectedResult
 */
class AutomatedReasoningPolicyScenario extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     alternateExpression: string,
     *     ruleIds: list<string>,
     *     expectedResult: 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
