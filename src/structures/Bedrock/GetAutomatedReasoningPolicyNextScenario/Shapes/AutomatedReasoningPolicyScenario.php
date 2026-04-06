<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyNextScenario\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property string $alternateExpression
 * @property 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION' $expectedResult
 * @property list<string> $ruleIds
 */
class AutomatedReasoningPolicyScenario extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     alternateExpression: string,
     *     expectedResult: 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION',
     *     ruleIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
