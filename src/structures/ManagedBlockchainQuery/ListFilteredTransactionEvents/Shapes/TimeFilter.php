<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockchainInstant $from
 * @property BlockchainInstant $to
 */
class TimeFilter extends Shape
{
    /**
     * @param array{
     *     from?: BlockchainInstant,
     *     to?: BlockchainInstant
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
