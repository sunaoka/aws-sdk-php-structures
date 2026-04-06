<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Result
 * @property ErrorObject|null $Error
 */
class ChainedInvokeDetails extends Shape
{
    /**
     * @param array{
     *     Result?: string|null,
     *     Error?: ErrorObject|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
