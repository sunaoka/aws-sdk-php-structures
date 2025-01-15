<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Value
 * @property int|null $Count
 */
class HistogramEntry extends Shape
{
    /**
     * @param array{
     *     Value?: double|null,
     *     Count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
