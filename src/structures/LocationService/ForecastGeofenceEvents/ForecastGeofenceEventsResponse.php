<?php

namespace Sunaoka\Aws\Structures\LocationService\ForecastGeofenceEvents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ForecastedEvent> $ForecastedEvents
 * @property string $NextToken
 * @property 'Kilometers'|'Miles' $DistanceUnit
 * @property 'KilometersPerHour'|'MilesPerHour' $SpeedUnit
 */
class ForecastGeofenceEventsResponse extends Response
{
}
