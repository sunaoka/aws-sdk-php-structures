<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode;

trait GeocodeTrait
{
    /**
     * @param GeocodeRequest $args
     * @return GeocodeResponse
     */
    public function geocode(GeocodeRequest $args)
    {
        $result = parent::geocode($args->toArray());
        return new GeocodeResponse($result->toArray());
    }
}
