<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventError $Error
 */
class ChainedInvokeFailedDetails extends Shape
{
    /**
     * @param array{Error: EventError} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
