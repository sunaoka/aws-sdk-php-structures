<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventError|null $Error
 */
class WaitCancelledDetails extends Shape
{
    /**
     * @param array{Error?: EventError|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
