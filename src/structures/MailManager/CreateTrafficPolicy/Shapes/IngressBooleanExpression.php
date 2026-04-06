<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressBooleanToEvaluate $Evaluate
 * @property 'IS_TRUE'|'IS_FALSE' $Operator
 */
class IngressBooleanExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: IngressBooleanToEvaluate,
     *     Operator: 'IS_TRUE'|'IS_FALSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
