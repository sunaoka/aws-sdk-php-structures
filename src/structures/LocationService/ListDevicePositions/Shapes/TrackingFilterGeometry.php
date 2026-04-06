<?php

namespace Sunaoka\Aws\Structures\LocationService\ListDevicePositions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>>|null $Polygon
 */
class TrackingFilterGeometry extends Shape
{
    /**
     * @param array{Polygon?: list<list<list<double>>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
