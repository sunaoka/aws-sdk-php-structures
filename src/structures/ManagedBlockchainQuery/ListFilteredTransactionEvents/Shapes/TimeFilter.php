<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockchainInstant|null $from
 * @property BlockchainInstant|null $to
 */
class TimeFilter extends Shape
{
    /**
     * @param array{
     *     from?: BlockchainInstant|null,
     *     to?: BlockchainInstant|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
