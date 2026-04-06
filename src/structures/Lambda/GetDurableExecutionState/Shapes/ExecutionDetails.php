<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputPayload
 */
class ExecutionDetails extends Shape
{
    /**
     * @param array{InputPayload?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
