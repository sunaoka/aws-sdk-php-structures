<?php

namespace Sunaoka\Aws\Structures\LocationService\ForecastGeofenceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property Shapes\ForecastGeofenceEventsDeviceState $DeviceState
 * @property double|null $TimeHorizonMinutes
 * @property 'Kilometers'|'Miles'|null $DistanceUnit
 * @property 'KilometersPerHour'|'MilesPerHour'|null $SpeedUnit
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ForecastGeofenceEventsRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     DeviceState: Shapes\ForecastGeofenceEventsDeviceState,
     *     TimeHorizonMinutes?: double|null,
     *     DistanceUnit?: 'Kilometers'|'Miles'|null,
     *     SpeedUnit?: 'KilometersPerHour'|'MilesPerHour'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
