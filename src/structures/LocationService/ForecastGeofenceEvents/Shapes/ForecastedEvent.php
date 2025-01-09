<?php

namespace Sunaoka\Aws\Structures\LocationService\ForecastGeofenceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventId
 * @property string $GeofenceId
 * @property bool $IsDeviceInGeofence
 * @property double $NearestDistance
 * @property 'ENTER'|'EXIT'|'IDLE' $EventType
 * @property \Aws\Api\DateTimeResult $ForecastedBreachTime
 * @property array<string, string> $GeofenceProperties
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
     *     ForecastedBreachTime?: \Aws\Api\DateTimeResult,
     *     GeofenceProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
