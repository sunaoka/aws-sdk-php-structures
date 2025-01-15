<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\BatchGetTokenBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $time
 */
class BlockchainInstant extends Shape
{
    /**
     * @param array{time?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
