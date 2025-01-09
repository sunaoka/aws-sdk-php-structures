<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $OtherCount
 * @property int $TotalCount
 */
class FaultStatistics extends Shape
{
    /**
     * @param array{
     *     OtherCount?: int,
     *     TotalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
