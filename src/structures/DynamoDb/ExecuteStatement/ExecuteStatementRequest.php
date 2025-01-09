<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Statement
 * @property list<Shapes\AttributeValue> $Parameters
 * @property bool $ConsistentRead
 * @property string $NextToken
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 * @property int<1, max> $Limit
 * @property 'ALL_OLD'|'NONE' $ReturnValuesOnConditionCheckFailure
 */
class ExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     Statement: string,
     *     Parameters?: list<Shapes\AttributeValue>,
     *     ConsistentRead?: bool,
     *     NextToken?: string,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE',
     *     Limit?: int<1, max>,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
