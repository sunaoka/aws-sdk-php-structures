<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSACTION_TIMESTAMP' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListTransactionsSort extends Shape
{
    /**
     * @param array{
     *     sortBy?: 'TRANSACTION_TIMESTAMP',
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
