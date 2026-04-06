<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeofenceId
 * @property array<string, string>|null $GeofenceProperties
 * @property GeofenceGeometry $Geometry
 */
class BatchPutGeofenceRequestEntry extends Shape
{
    /**
     * @param array{
     *     GeofenceId: string,
     *     GeofenceProperties?: array<string, string>|null,
     *     Geometry: GeofenceGeometry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
