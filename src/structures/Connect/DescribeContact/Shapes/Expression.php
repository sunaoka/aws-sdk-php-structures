<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeCondition $AttributeCondition
 * @property list<Expression> $AndExpression
 * @property list<Expression> $OrExpression
 * @property AttributeCondition $NotAttributeCondition
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     AttributeCondition?: AttributeCondition,
     *     AndExpression?: list<Expression>,
     *     OrExpression?: list<Expression>,
     *     NotAttributeCondition?: AttributeCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
