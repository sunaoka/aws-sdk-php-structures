<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteTransaction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Statement
 * @property list<AttributeValue> $Parameters
 * @property 'ALL_OLD'|'NONE' $ReturnValuesOnConditionCheckFailure
 */
class ParameterizedStatement extends Shape
{
    /**
     * @param array{
     *     Statement: string,
     *     Parameters?: list<AttributeValue>,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
