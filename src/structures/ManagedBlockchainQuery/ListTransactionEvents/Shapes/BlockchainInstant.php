<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $time
 */
class BlockchainInstant extends Shape
{
    /**
     * @param array{time?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
