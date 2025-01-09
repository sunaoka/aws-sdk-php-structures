<?php

namespace Sunaoka\Aws\Structures\DynamoDb\Scan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeValue> $AttributeValueList
 * @property 'EQ'|'NE'|'IN'|'LE'|'LT'|'GE'|'GT'|'BETWEEN'|'NOT_NULL'|'NULL'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH' $ComparisonOperator
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     AttributeValueList?: list<AttributeValue>,
     *     ComparisonOperator: 'EQ'|'NE'|'IN'|'LE'|'LT'|'GE'|'GT'|'BETWEEN'|'NOT_NULL'|'NULL'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
