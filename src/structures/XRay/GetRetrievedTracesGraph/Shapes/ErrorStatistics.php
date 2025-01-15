<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ThrottleCount
 * @property int|null $OtherCount
 * @property int|null $TotalCount
 */
class ErrorStatistics extends Shape
{
    /**
     * @param array{
     *     ThrottleCount?: int|null,
     *     OtherCount?: int|null,
     *     TotalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
