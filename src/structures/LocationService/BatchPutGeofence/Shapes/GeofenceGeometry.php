<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>> $Polygon
 * @property Circle $Circle
 * @property string $Geobuf
 */
class GeofenceGeometry extends Shape
{
    /**
     * @param array{
     *     Polygon?: list<list<list<double>>>,
     *     Circle?: Circle,
     *     Geobuf?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
