<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeofenceId
 * @property GeofenceGeometry $Geometry
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property array<string, string> $GeofenceProperties
 */
class ListGeofenceResponseEntry extends Shape
{
    /**
     * @param array{
     *     GeofenceId: string,
     *     Geometry: GeofenceGeometry,
     *     Status: string,
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     UpdateTime: \Aws\Api\DateTimeResult,
     *     GeofenceProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
