<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $XAmznTraceId
 */
class TraceHeader extends Shape
{
    /**
     * @param array{XAmznTraceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
