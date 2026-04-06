<?php

namespace Sunaoka\Aws\Structures\LocationService\ForecastGeofenceEvents;

trait ForecastGeofenceEventsTrait
{
    /**
     * @param ForecastGeofenceEventsRequest $args
     * @return ForecastGeofenceEventsResponse
     */
    public function forecastGeofenceEvents(ForecastGeofenceEventsRequest $args)
    {
        $result = parent::forecastGeofenceEvents($args->toArray());
        return new ForecastGeofenceEventsResponse($result->toArray());
    }
}
