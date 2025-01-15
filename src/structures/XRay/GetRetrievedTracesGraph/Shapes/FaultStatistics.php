<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $OtherCount
 * @property int|null $TotalCount
 */
class FaultStatistics extends Shape
{
    /**
     * @param array{
     *     OtherCount?: int|null,
     *     TotalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
