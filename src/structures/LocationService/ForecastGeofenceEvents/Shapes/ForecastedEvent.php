<?php

namespace Sunaoka\Aws\Structures\LocationService\ForecastGeofenceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property string $GeofenceId
 * @property bool $IsDeviceInGeofence
 * @property double $NearestDistance
 * @property 'ENTER'|'EXIT'|'IDLE' $EventType
 * @property \Aws\Api\DateTimeResult|null $ForecastedBreachTime
 * @property array<string, string>|null $GeofenceProperties
 */
class ForecastedEvent extends Shape
{
    /**
     * @param array{
     *     EventId: string,
     *     GeofenceId: string,
     *     IsDeviceInGeofence: bool,
     *     NearestDistance: double,
     *     EventType: 'ENTER'|'EXIT'|'IDLE',
     *     ForecastedBreachTime?: \Aws\Api\DateTimeResult|null,
     *     GeofenceProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
