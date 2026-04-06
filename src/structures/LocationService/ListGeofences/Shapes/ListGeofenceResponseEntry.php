<?php

namespace Sunaoka\Aws\Structures\LocationService\ListGeofences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $GeofenceId
 * @property array<string, string>|null $GeofenceProperties
 * @property GeofenceGeometry $Geometry
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $UpdateTime
 */
class ListGeofenceResponseEntry extends Shape
{
    /**
     * @param array{
     *     CreateTime: \Aws\Api\DateTimeResult,
     *     GeofenceId: string,
     *     GeofenceProperties?: array<string, string>|null,
     *     Geometry: GeofenceGeometry,
     *     Status: string,
     *     UpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
