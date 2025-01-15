<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Statement
 * @property list<AttributeValue>|null $Parameters
 * @property bool|null $ConsistentRead
 * @property 'ALL_OLD'|'NONE'|null $ReturnValuesOnConditionCheckFailure
 */
class BatchStatementRequest extends Shape
{
    /**
     * @param array{
     *     Statement: string,
     *     Parameters?: list<AttributeValue>|null,
     *     ConsistentRead?: bool|null,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
