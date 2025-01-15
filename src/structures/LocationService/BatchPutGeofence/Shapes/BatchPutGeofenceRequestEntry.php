<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeofenceId
 * @property GeofenceGeometry $Geometry
 * @property array<string, string>|null $GeofenceProperties
 */
class BatchPutGeofenceRequestEntry extends Shape
{
    /**
     * @param array{
     *     GeofenceId: string,
     *     Geometry: GeofenceGeometry,
     *     GeofenceProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
