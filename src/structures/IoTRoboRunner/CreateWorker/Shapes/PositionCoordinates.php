<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CartesianCoordinates|null $cartesianCoordinates
 */
class PositionCoordinates extends Shape
{
    /**
     * @param array{cartesianCoordinates?: CartesianCoordinates|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
