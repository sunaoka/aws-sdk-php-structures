<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ThrottleCount
 * @property int $OtherCount
 * @property int $TotalCount
 */
class ErrorStatistics extends Shape
{
    /**
     * @param array{
     *     ThrottleCount?: int,
     *     OtherCount?: int,
     *     TotalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
