<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $voutSpent
 */
class VoutFilter extends Shape
{
    /**
     * @param array{voutSpent: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
