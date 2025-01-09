<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Statement
 * @property list<AttributeValue> $Parameters
 * @property bool $ConsistentRead
 * @property 'ALL_OLD'|'NONE' $ReturnValuesOnConditionCheckFailure
 */
class BatchStatementRequest extends Shape
{
    /**
     * @param array{
     *     Statement: string,
     *     Parameters?: list<AttributeValue>,
     *     ConsistentRead?: bool,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
