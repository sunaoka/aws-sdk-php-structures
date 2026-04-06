<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleStringToEvaluate $Evaluate
 * @property 'EQUALS'|'NOT_EQUALS'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS' $Operator
 * @property list<string> $Values
 */
class RuleStringExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: RuleStringToEvaluate,
     *     Operator: 'EQUALS'|'NOT_EQUALS'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
