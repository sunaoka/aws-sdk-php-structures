<?php

namespace Sunaoka\Aws\Structures\DynamoDb\PutItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeValue $Value
 * @property bool $Exists
 * @property 'EQ'|'NE'|'IN'|'LE'|'LT'|'GE'|'GT'|'BETWEEN'|'NOT_NULL'|'NULL'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH' $ComparisonOperator
 * @property list<AttributeValue> $AttributeValueList
 */
class ExpectedAttributeValue extends Shape
{
    /**
     * @param array{
     *     Value?: AttributeValue,
     *     Exists?: bool,
     *     ComparisonOperator?: 'EQ'|'NE'|'IN'|'LE'|'LT'|'GE'|'GT'|'BETWEEN'|'NOT_NULL'|'NULL'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH',
     *     AttributeValueList?: list<AttributeValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
