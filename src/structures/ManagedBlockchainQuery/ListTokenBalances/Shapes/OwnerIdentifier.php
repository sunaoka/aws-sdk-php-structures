<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTokenBalances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $address
 */
class OwnerIdentifier extends Shape
{
    /**
     * @param array{address: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
