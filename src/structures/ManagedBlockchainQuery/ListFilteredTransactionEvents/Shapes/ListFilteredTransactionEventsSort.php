<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'blockchainInstant' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListFilteredTransactionEventsSort extends Shape
{
    /**
     * @param array{
     *     sortBy?: 'blockchainInstant',
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
