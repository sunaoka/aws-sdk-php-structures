<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode;

trait ReverseGeocodeTrait
{
    /**
     * @param ReverseGeocodeRequest $args
     * @return ReverseGeocodeResponse
     */
    public function reverseGeocode(ReverseGeocodeRequest $args)
    {
        $result = parent::reverseGeocode($args->toArray());
        return new ReverseGeocodeResponse($result->toArray());
    }
}
