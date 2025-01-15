<?php

namespace Sunaoka\Aws\Structures\DynamoDb\PutItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeValue|null $Value
 * @property bool|null $Exists
 * @property 'EQ'|'NE'|'IN'|'LE'|'LT'|'GE'|'GT'|'BETWEEN'|'NOT_NULL'|'NULL'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH'|null $ComparisonOperator
 * @property list<AttributeValue>|null $AttributeValueList
 */
class ExpectedAttributeValue extends Shape
{
    /**
     * @param array{
     *     Value?: AttributeValue|null,
     *     Exists?: bool|null,
     *     ComparisonOperator?: 'EQ'|'NE'|'IN'|'LE'|'LT'|'GE'|'GT'|'BETWEEN'|'NOT_NULL'|'NULL'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH'|null,
     *     AttributeValueList?: list<AttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
