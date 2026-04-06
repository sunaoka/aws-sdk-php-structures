<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'FINAL'|'NONFINAL'> $include
 */
class ConfirmationStatusFilter extends Shape
{
    /**
     * @param array{include: list<'FINAL'|'NONFINAL'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
