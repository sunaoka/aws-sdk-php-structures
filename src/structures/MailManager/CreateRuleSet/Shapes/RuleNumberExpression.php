<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleNumberToEvaluate $Evaluate
 * @property 'EQUALS'|'NOT_EQUALS'|'LESS_THAN'|'GREATER_THAN'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN_OR_EQUAL' $Operator
 * @property double $Value
 */
class RuleNumberExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: RuleNumberToEvaluate,
     *     Operator: 'EQUALS'|'NOT_EQUALS'|'LESS_THAN'|'GREATER_THAN'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN_OR_EQUAL',
     *     Value: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
