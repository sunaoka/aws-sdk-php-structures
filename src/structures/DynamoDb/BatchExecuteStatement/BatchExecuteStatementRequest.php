<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchStatementRequest> $Statements
 * @property 'INDEXES'|'TOTAL'|'NONE' $ReturnConsumedCapacity
 */
class BatchExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     Statements: list<Shapes\BatchStatementRequest>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
