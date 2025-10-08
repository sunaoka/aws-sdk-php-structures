<?php

namespace Sunaoka\Aws\Structures\Route53\ListGeoLocations;

trait ListGeoLocationsTrait
{
    /**
     * @param ListGeoLocationsRequest $args
     * @return ListGeoLocationsResponse
     */
    public function listGeoLocations(ListGeoLocationsRequest $args)
    {
        $result = parent::listGeoLocations($args->toArray());
        return new ListGeoLocationsResponse($result->toArray());
    }
}
