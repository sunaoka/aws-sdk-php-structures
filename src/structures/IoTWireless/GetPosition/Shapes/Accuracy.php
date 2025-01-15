<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPosition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $HorizontalAccuracy
 * @property float|null $VerticalAccuracy
 */
class Accuracy extends Shape
{
    /**
     * @param array{
     *     HorizontalAccuracy?: float|null,
     *     VerticalAccuracy?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
