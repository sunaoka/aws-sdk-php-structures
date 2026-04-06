<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressStringToEvaluate $Evaluate
 * @property 'EQUALS'|'NOT_EQUALS'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS' $Operator
 * @property list<string> $Values
 */
class IngressStringExpression extends Shape
{
    /**
     * @param array{
     *     Evaluate: IngressStringToEvaluate,
     *     Operator: 'EQUALS'|'NOT_EQUALS'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
