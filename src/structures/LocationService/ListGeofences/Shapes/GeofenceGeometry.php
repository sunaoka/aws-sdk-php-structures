<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>> $Polygon
 * @property Circle $Circle
 * @property \Psr\Http\Message\StreamInterface $Geobuf
 */
class GeofenceGeometry extends Shape
{
    /**
     * @param array{
     *     Polygon?: list<list<list<double>>>,
     *     Circle?: Circle,
     *     Geobuf?: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
