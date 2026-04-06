<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListFilteredTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $transactionEventToAddress
 */
class AddressIdentifierFilter extends Shape
{
    /**
     * @param array{transactionEventToAddress: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
