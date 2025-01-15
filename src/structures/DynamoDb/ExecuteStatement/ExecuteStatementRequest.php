<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Statement
 * @property list<Shapes\AttributeValue>|null $Parameters
 * @property bool|null $ConsistentRead
 * @property string|null $NextToken
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 * @property int<1, max>|null $Limit
 * @property 'ALL_OLD'|'NONE'|null $ReturnValuesOnConditionCheckFailure
 */
class ExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     Statement: string,
     *     Parameters?: list<Shapes\AttributeValue>|null,
     *     ConsistentRead?: bool|null,
     *     NextToken?: string|null,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null,
     *     Limit?: int<1, max>|null,
     *     ReturnValuesOnConditionCheckFailure?: 'ALL_OLD'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
