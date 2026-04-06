<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $x
 * @property double $y
 * @property double|null $z
 */
class CartesianCoordinates extends Shape
{
    /**
     * @param array{
     *     x: double,
     *     y: double,
     *     z?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
