<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $HorizontalAccuracy
 * @property float $VerticalAccuracy
 */
class Accuracy extends Shape
{
    /**
     * @param array{
     *     HorizontalAccuracy?: float,
     *     VerticalAccuracy?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
