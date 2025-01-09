<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuleBooleanToEvaluate $Evaluate
 * @property 'IS_TRUE'|'IS_FALSE' $Operator
 */
class RuleBooleanExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: RuleBooleanToEvaluate,
     *     Operator: 'IS_TRUE'|'IS_FALSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
