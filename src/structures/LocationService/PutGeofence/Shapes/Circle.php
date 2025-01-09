<?php

namespace Sunaoka\Aws\Structures\LocationService\PutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Center
 * @property double $Radius
 */
class Circle extends Shape
{
    /**
     * @param array{
     *     Center: list<double>,
     *     Radius: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
