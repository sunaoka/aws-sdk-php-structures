<?php

namespace Sunaoka\Aws\Structures\LocationService\ForecastGeofenceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property Shapes\ForecastGeofenceEventsDeviceState $DeviceState
 * @property double $TimeHorizonMinutes
 * @property 'Kilometers'|'Miles' $DistanceUnit
 * @property 'KilometersPerHour'|'MilesPerHour' $SpeedUnit
 * @property string $NextToken
 * @property int $MaxResults
 */
class ForecastGeofenceEventsRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     DeviceState: Shapes\ForecastGeofenceEventsDeviceState,
     *     TimeHorizonMinutes?: double,
     *     DistanceUnit?: 'Kilometers'|'Miles',
     *     SpeedUnit?: 'KilometersPerHour'|'MilesPerHour',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
