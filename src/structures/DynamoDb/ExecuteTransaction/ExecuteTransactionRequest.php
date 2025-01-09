<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ParameterizedStatement> $TransactStatements
 * @property string $ClientRequestToken
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 */
class ExecuteTransactionRequest extends Request
{
    /**
     * @param array{
     *     TransactStatements: list<Shapes\ParameterizedStatement>,
     *     ClientRequestToken?: string,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
