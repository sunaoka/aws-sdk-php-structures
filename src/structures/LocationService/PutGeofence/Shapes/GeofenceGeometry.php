<?php

namespace Sunaoka\Aws\Structures\LocationService\PutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Circle|null $Circle
 * @property list<list<list<double>>>|null $Polygon
 */
class GeofenceGeometry extends Shape
{
    /**
     * @param array{
     *     Circle?: Circle|null,
     *     Polygon?: list<list<list<double>>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
