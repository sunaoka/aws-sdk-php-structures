<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeCondition|null $AttributeCondition
 * @property list<Expression>|null $AndExpression
 * @property list<Expression>|null $OrExpression
 * @property AttributeCondition|null $NotAttributeCondition
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     AttributeCondition?: AttributeCondition|null,
     *     AndExpression?: list<Expression>|null,
     *     OrExpression?: list<Expression>|null,
     *     NotAttributeCondition?: AttributeCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
