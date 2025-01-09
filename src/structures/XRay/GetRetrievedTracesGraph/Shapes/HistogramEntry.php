<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property int $Count
 */
class HistogramEntry extends Shape
{
    /**
     * @param array{
     *     Value?: double,
     *     Count?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
