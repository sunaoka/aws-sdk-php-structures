<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSACTION_TIMESTAMP'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListTransactionsSort extends Shape
{
    /**
     * @param array{
     *     sortBy?: 'TRANSACTION_TIMESTAMP'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
