<?php

namespace Sunaoka\Aws\Structures\LocationService\PutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<list<double>>>|null $Polygon
 * @property Circle|null $Circle
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Geobuf
 */
class GeofenceGeometry extends Shape
{
    /**
     * @param array{
     *     Polygon?: list<list<list<double>>>|null,
     *     Circle?: Circle|null,
     *     Geobuf?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
