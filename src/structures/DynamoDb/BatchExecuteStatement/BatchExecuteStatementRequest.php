<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchExecuteStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchStatementRequest> $Statements
 * @property 'INDEXES'|'TOTAL'|'NONE'|null $ReturnConsumedCapacity
 */
class BatchExecuteStatementRequest extends Request
{
    /**
     * @param array{
     *     Statements: list<Shapes\BatchStatementRequest>,
     *     ReturnConsumedCapacity?: 'INDEXES'|'TOTAL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
