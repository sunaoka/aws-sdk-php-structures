<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleVerdictToEvaluate $Evaluate
 * @property 'EQUALS'|'NOT_EQUALS' $Operator
 * @property list<'PASS'|'FAIL'|'GRAY'|'PROCESSING_FAILED'> $Values
 */
class RuleVerdictExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: RuleVerdictToEvaluate,
     *     Operator: 'EQUALS'|'NOT_EQUALS',
     *     Values: list<'PASS'|'FAIL'|'GRAY'|'PROCESSING_FAILED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
