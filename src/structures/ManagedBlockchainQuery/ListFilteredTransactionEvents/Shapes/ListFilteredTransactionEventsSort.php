<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'blockchainInstant'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListFilteredTransactionEventsSort extends Shape
{
    /**
     * @param array{
     *     sortBy?: 'blockchainInstant'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
