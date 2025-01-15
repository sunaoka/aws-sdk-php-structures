<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteTransaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ParameterizedStatement> $TransactStatements
 * @property string|null $ClientRequestToken
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 */
class ExecuteTransactionRequest extends Request
{
    /**
     * @param array{
     *     TransactStatements: list<Shapes\ParameterizedStatement>,
     *     ClientRequestToken?: string|null,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
