<?php

namespace Sunaoka\Aws\Structures\LocationService\PutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>> $Polygon
 * @property Circle $Circle
 * @property string|resource|\Psr\Http\Message\StreamInterface $Geobuf
 */
class GeofenceGeometry extends Shape
{
    /**
     * @param array{
     *     Polygon?: list<list<list<double>>>,
     *     Circle?: Circle,
     *     Geobuf?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
