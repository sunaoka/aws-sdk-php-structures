<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteTransaction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Statement
 * @property list<AttributeValue>|null $Parameters
 * @property 'ALL_OLD'|'NONE'|null $ReturnValuesOnConditionCheckFailure
 */
class ParameterizedStatement extends Shape
{
    /**
     * @param array{
     *     Statement: string,
     *     Parameters?: list<AttributeValue>|null,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
